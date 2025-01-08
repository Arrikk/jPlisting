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
            
            $users = User::paginate($p->page)::find([]);

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
                "data" => fn ($d) => json_decode($d)
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
                    placeholder:$p->placeholder
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
}

// jplisting.test/evaluate?address=5500 Grand Lake Drive, San Antonio, TX, 78244&propertyType=Single Family&bedrooms=4&bathrooms=2&squareFootage=1600&compCount=5