<?php
use Core\View;

echo "<div class=\"row g-3 row-deck\">";
    View::component('/hr/weekly_labor');
    View::component('/hr/labor_cost');
    View::component('/hr/employee_kpi');
    // View::component('/hr/schedules');
echo "<div>";