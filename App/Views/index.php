<?php

use App\Views\App;
use Core\View;

# start html tag containing the head and other metas
// App::html($title ?? 'Leviplatte Admin');
App::render(
     // View::component('app/topbar'),
     App::body( 
          dirname(__FILE__) .'/'. $__page . '.php',
          $page ?? 'list'
     ),
);
# create topbar across all pages
// App::topbar();
# make body contents dynamic based on page loaded
// App::body( 
//      dirname(__FILE__) .'/'. $__page . '.php',
//      $page ?? 'list'
// );
#end the html containing foorer and some scripts
// App::htmlEnd();
$file = explode('/', $__page);
# Make a dynamic script file for new pages
App::script( 
     dirname(__FILE__) .'/'. $file[0].'/'.$file[0].'.js.html'
);
