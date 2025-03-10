<?php

use App\Views\App;
use Core\View;
App::render(
     // View::component('app/topbar'),
     App::body( 
          dirname(__FILE__) .'/'. $__page . '.php',
          $page ?? 'list'
     ),
);
$file = explode('/', $__page);
# Make a dynamic script file for new pages
App::script( 
     dirname(__FILE__) .'/'. $file[0].'/'.$file[0].'.js.html'
);
