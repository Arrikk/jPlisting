<?php

namespace App\Email;

use App\Mail;
use Core\Env;
use Core\Http\Res;

class Evaluation
{

    public function __construct(
        public string $postcode,
        public string $property_type,
        public string $construction_date,
        public string $internal_area,
        public string $bedrooms,
        public string $bathrooms,
        public string $finish_quality,
        public string $outdoor_space,
        public string $off_street_parking,
        public string|int $estimate,
        public string|int $margin,
        public string $address,
    ) {
        // $args = func_get_args();
        // foreach ($args as $arg) {
        //     if (property_exists($this, $arg[0])) {
        //         $this->{$arg[0]} = $arg[1];
        //     }
        // }
    }

    public function sendCopy($email)
    {
        try {
            //code...
            return  Mail::mail($email, Env::MAIL_FROM(), "Valuation Result", Templates::EmailNotifications($this));
        } catch (\Throwable $th) {
            //throw $th;
            Res::status(400)->error($th->getMessage());
        }
    }
}
