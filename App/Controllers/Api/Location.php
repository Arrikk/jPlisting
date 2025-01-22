<?php

namespace App\Controllers\Api;

use Core\Controller;
use Core\Env;
use Core\Http\Res;
use Core\Pipes\Pipes;

class Location extends Controller
{
    public function lookupZipcode(Pipes $p)
    {
        $p->pipe([
            "zipCode" => $p->zipCode()->isrequired()->zipCode
        ]);


        // $sample = json_decode(file_get_contents("map.json"));
        // $addresses = [];
        // if (isset($sample->results))
        //     foreach ($sample->results as  $data) {
        //         $data = (object) $data;
        //         $address = $data->formatted_address;
        //         $addresses[] = $address;
        //     }

        // Res::json($addresses);

        try {
            $APIKey = Env::GET_ADDRESS_API_KEY();
            $url = "https://api.getaddress.io/autocomplete/" . urlencode($p->zipCode) . "&api-key=" . $APIKey;
            $request = file_get_contents($url);
            $response = json_decode($request);

            $addresses = [];

            if (isset($response->suggestions))
                foreach ($response->suggestions as $data) {
                    $data = (object) $data;
                    $address = $data->address;
                    $addresses[] = $address;
                }
            Res::json($addresses);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }
}
