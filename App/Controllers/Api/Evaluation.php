<?php

namespace App\Controllers\Api;

use App\Models\Evaluation as ModelsEvaluation;
use App\Models\User;
use App\Models\Valuation;
use Core\Controller;
use Core\Env;
use Core\Http\Req;
use Core\Http\Res;
use Core\Pipes\Pipes;

class Evaluation extends Controller
{

    public function convertToQuery(array $payload)
    {
        $out = "?";
        foreach ($payload as $k => $v) {
            $out .= $k . "=" . $v . "&";
        }

        $out = preg_replace("/&$/", "", $out);
        // Res::send($out);
        return $out;
    }

    public function evaluateProperty(Pipes $p)
    {

        $pipe = (array) $p->pipe([
            // "key" => ""
            "address" => $p->address,
            "propertyType" => $p->propertyType,
            "bedrooms" => $p->bedrooms,
            "bathrooms" => $p->bathrooms,
            "squareFootage" => $p->squareFootage,
            "compCount" => $p->compCount
        ]);

        $id = $p->id;

        try {

            $queryString = $this->convertToQuery($pipe);

            $APIKEY = Env::RENT_CAST_KEY();
            $URL = Env::RENT_CAST_URL() . "avm/value" . $queryString;

            $request = Req::sleek([], [
                "X-Api-Key" => $APIKEY
            ])->get($URL);



            Res::json($request, true);

            $data = json_encode($request);

            $evaluation = Valuation::dump([
                "user" => $id,
                "data" => $data
            ]);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }

    public function propertyDataValuation(Pipes $p)
    {

        $out = '{
    "status": "success",
    "postcode": "OX4 1YB",
    "postcode_type": "full",
    "params": {
        "property_type": "Flat",
        "construction_date": "Pre-1914",
        "internal_area": "828",
        "bedrooms": "3",
        "bathrooms": "1",
        "finish_quality": "Below average",
        "outdoor_space": "Garden",
        "off_street_parking": "1 space"
    },
    "result": {
        "estimate": 355000,
        "margin": 20000
    },
    "process_time": "5.72"
}';

// $out = '{
//     "status": false,
//     "status_code": 422,
//     "response": {
//         "status": "error",
//         "code": "702",
//         "message": "Invalid input: finish quality",
//         "process_time": "0.04"
//     }
// }';


        $pipe = (array) $p->pipe([
            "key" => Env::PROPERTY_DATA_KEY(),
            "postcode" => $p->postcode()->isrequired()->postcode,
            "property_type" => $p->property_type()->isrequired()->property_type,
            "construction_date" => $p->construction_date()->isrequired()->construction_date,
            "internal_area" => $p->internal_area()->isrequired()->internal_area,
            "bedrooms" => $p->bedrooms()->isnumeric()->bedrooms,
            "bathrooms" => $p->bathrooms()->isnumeric()->bathrooms,
            "finish_quality" => $p->finish_quality()->isrequired()->finish_quality,
            "outdoor_space" => $p->outdoor_space()->isrequired()->outdoor_space,
            "off_street_parking" => $p->off_street_parking()->isrequired()->off_street_parking,
            "id" => $p->id()->isrequired()->id,
        ]);


        $id = $p->id;
        // Res::json(json_decode($out));
        try {

            $queryString = $this->convertToQuery($pipe);

            $URL = Env::PROPERTY_DATA_URL() . $queryString;

            // $request = Req::sleek([], [
            // ])->get($URL);
            $request = Req::slim([], [])->get($URL)->Call();


            Res::json($request, true);

            $data = json_encode($request);

            $evaluation = Valuation::dump([
                "user" => $id,
                "data" => $data
            ]);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }

    public function saveUser(Pipes $p)
    {

        $pipe = $p->pipe([
            "fullname" => $p->fullname()->isrequired()->serialize()->fullname,
            "email" => $p->email()->isemail()->email,
            "postcode" => $p->postcode()->isrequired()->postcode
        ]);

        try {
            $user = User::findOne(['email' => $pipe->email]);
            if($user)
                $user->updateUser((array) $pipe);
            else $user = User::dump((array) $pipe);

            Res::json($user);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }
}
