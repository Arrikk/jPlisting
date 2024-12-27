<?php

namespace App\Views\components\app;

use Core\Component;
use Core\View;

class App extends Component
{
    // public function _html($title = '')
    // {
    //     View::component('app/html', ['title' => $title]);
    // }

    // public function _topbar()
    // {
    //     View::component('app/topbar');
    // }

    public function _body($body, $menu = null, $page = null, $other = null)
    {
        $page;
        $authority = $menu;
        echo '';
            require_once $body;
        echo '';
    }

    public function _footer()
    {
        View::component('app/footer');
    }

    public function _script($script = '')
    {
        if (is_readable($script)) {
            require $script;
        }
    }
}