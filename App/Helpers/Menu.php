<?php

namespace App\Helpers;

use Core\Http\Res;

class Menu
{
    public static function myMenu()
    {
        $URL = $_SERVER['REQUEST_URI'];
        $CT = explode("/", $URL);

        return [];
    }
}
