<?php

use Core\View;

echo '<div class="row g-3 row-deck">';
    View::component('inventory/items');
    View::component('inventory/forcast');
    // View::component('inventory/low_stock');
    // View::component('inventory/food_beverage_cost');
    // View::component('inventory/weekly_realtime');
echo '</div>';