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

class Evaluation extends Controller{

    public function convertToQuery(Array $payload) {
        $out = "?";
        foreach($payload as $k => $v){
            $out .= $k."=".$v."&";
        }

        $out = preg_replace("/&$/", "", $out);
        // Res::send($out);
        return $out;
    }

    public function evaluateProperty(Pipes $p) {

        $pipe = (array) $p->pipe([
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
            $URL = Env::RENT_CAST_URL()."avm/value".$queryString;
    
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

    public function saveUser(Pipes $p) {

        $pipe = $p->pipe([
            "fullname" => $p->fullname()->isrequired()->serialize()->fullname,
            "email" => $p->email()->isemail()->email,
            "postcode" => $p->postcode()->isrequired()->postcode
        ]);

        try {
            $user = User::dump((array) $pipe);
            Res::json($user);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }



    }

}