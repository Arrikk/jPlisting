<?php

namespace App\Controllers\Api;

use App\Controllers\Authenticated\Authenticated;
use App\Helpers\Filters;
use App\Models\Form;
use App\Models\User;
use App\Models\Valuation;
use Core\Http\Res;
use Core\Pipes\Pipes;

class Admin extends Authenticated
{

    public function users(Pipes $p)
    {

        try {
            $p->page()->default(1)->toint()->page;

            $users = User::paginate($p->page, 30)::find([]);
            // $users = User::find([
            //     '$.group' => "MONTH(created_at), MONTHNAME(created_at)",
            //     '$.order' => "YEAR(created_at), MONTH(created_at)"
            // ], "MONTHNAME(created_at) as period, COUNT(DISTINCT id) as total, DATE_FORMAT(created_at, '%Y-%m') as inDate");

            return Res::send($users);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }

    public function userValuation(Pipes $p)
    {
        try {
            $p->pipe(["user" => $p->user()->isrequired()->isnumeric()->user]);
            $user = Valuation::find(["where.user" => $p->user]);
            $user = Filters::from($user)->append([
                "data" => fn($d) => json_decode($d)
            ])->done();
            return Res::send($user);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }

    public function updateForm(Pipes $p)
    {

        try {
            $p = $p->pipe([
                "id" => $p->form()->isrequired()->form,
                "title" => $p->title()->toString()->title,
                "enabled" => $p->enabled()->toBool()->enabled,
                "placeholder" => $p->placeholder()->toString()->placeholder,
            ]);

            $form = updateForm(
                new Form(
                    title: $p->title,
                    id: $p->id,
                    enabled: $p->enabled,
                    placeholder: $p->placeholder
                )
            );
            $form = findForm($p->id);


            return Res::send($form);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }

    public function valuationForms(Pipes $p)
    {
        try {
            $form = findForm();
            return Res::send($form);
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }
    public function exportUsers(Pipes $p)
    {
        try {
            $p->page()->default(1)->toint()->page;

            $data = User::paginate($p->page, 30)::find([], "id as ID, fullname as Fullname, email as Email, postcode as Postcode");
            $date = date("Y-m-d-H:i:s");

            if (count($data->items) > 0) {
                
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment; filename="' . $date . '-export.csv"');
                header('Pragma: no-cache');
                header('Expires: 0');

                $output = fopen('php://output', 'w');

                $items = (array) $data->items;
                
                $headers = array_keys((array) $items[0]);
                fputcsv($output, $headers);
                foreach ($items as $item) {
                    fputcsv($output, (array) $item);
                }
                fclose($output);
            }

            echo "JPLISTING!";
        } catch (\Throwable $th) {
            Res::status(400)::throwable($th);
        }
    }
}
