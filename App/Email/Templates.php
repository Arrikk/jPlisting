<?php
namespace App\Email;

use Core\Http\Res;

class Templates
{
    public static function EmailActivation($data = [])
    {
        extract($data);
        $url = dirname(__DIR__).'/Views/emailTemplates/emails_activate.html';
        $file = file_get_contents($url);
        $file = str_replace('{{ token }}', $token, $file);
        $file = str_replace('{{ email }}', $email, $file);
        return $file;
    }

    public static function forgotEmail($data = []) 
    {
        extract($data);
        $url = dirname(__DIR__).'/Views/emailTemplates/emails_forgot.html';
        $file = file_get_contents($url);
        // $file = str_replace('{{ token }}', $token, $file);
        $file = str_replace('{{ email }}', $email, $file);
        $file = str_replace('{{ URL }}', $URL, $file);
        return $file;
    }

    public static function EmailNotifications (Evaluation $d)
    {
        try {
            $url = dirname(__DIR__).'/Views/emailTemplates/evaluation.html';
            $file = file_get_contents($url);
            // $file = str_replace('{{ token }}', $token, $file);
            $file = str_replace('[price]', $d->estimate, $file);
            $file = str_replace('[margin]', $d->margin, $file);
            $file = str_replace('[location]', $d->address, $file);
            $file = str_replace('[construction_date]', $d->construction_date, $file);
            $file = str_replace('[property_type]', $d->property_type, $file);
            $file = str_replace('[bedrooms]', $d->bedrooms, $file);
            $file = str_replace('[bathrooms]', $d->bathrooms, $file);
            $file = str_replace('[internal_area]', $d->internal_area, $file);
            $file = str_replace('[outdoor]', $d->outdoor_space, $file);
            $file = str_replace('[finish]', $d->finish_quality, $file);
            $file = str_replace('[parking]', $d->off_street_parking, $file);
            return $file;
        } catch (\Throwable $th) {
            Res::status(404)->error("Cannot Load Evaluation Template File,,, File not found.");
        }
    }
}