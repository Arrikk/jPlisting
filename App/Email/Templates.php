<?php
namespace App\Email;

use Core\Http\Res;

class Templates
{

    public static function EmailNotifications (Evaluation $d)
    {
        try {
            $url = dirname(__DIR__).'/Views/emailTemplates/evaluation.html';
            $file = file_get_contents($url);
            $file =  mb_convert_encoding($file, 'UTF-8', 'auto');
            $file = html_entity_decode($file, ENT_DISALLOWED);
            // $file = str_replace('{{ token }}', $token, $file);
            // $file = str_replace('[name]', $d->name, $file);
            $estimate = '£' . number_format((float) $d->estimate, 0, '.', ',');
            $file = str_replace('[price]', $estimate, $file);
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
            // Res::status(404)->error("Cannot Load Evaluation Template File,,, File not found.");
            Res::status(500)->throwable($th);
        }
    }
}