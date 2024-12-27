<?php

use App\Views\components\app\App;
use Core\View;

echo "<div class=\"row g-3 row-deck\">";
View::component('dashboard/food_level_in_stock');
View::component('dashboard/food_cost');
View::component('dashboard/average_inventory');
View::component('dashboard/cogs_month');
View::component('dashboard/profit_loss');
View::component('dashboard/day_to_day');
View::component('dashboard/labor_cost');
View::component('dashboard/sales_channel');
View::component('dashboard/kpi');
echo "<div>";
