<?php

use App\Controllers\Api\Admin;
use App\Controllers\Api\Evaluation;
use Core\Router\Router as Route;

Route::get('', 'home@index');
Route::get('dashboard', 'home@dashboard');

Route::post('user', [Evaluation::class, "save-user"]);
// Route::post('evaluate', [Evaluation::class, "evaluate-property"]);
Route::post('evaluate', [Evaluation::class, "property-data-valuation"]);
Route::get('forms', [Admin::class, "valuation-forms"]);
Route::put('admin/form', [Admin::class, "update-form"]);
Route::get('admin/users', [Admin::class, "users"]);
Route::get('admin/user-valuation', [Admin::class, "user-valuation"]);

// Auth Route
Route::post('register', 'users@register@auth');
Route::post('auth/login', 'users@login@auth');

// Password
Route::put('password/change', 'password@change@auth');
Route::post('password/forgot', 'password@forgot@auth');
Route::post('password/reset', 'password@reset@auth');
Route::get('password/token/{token:[\da-f]+}', 'password@token@auth');

// Profile
Route::get('profile', 'account@profile');
Route::post('profile', 'account@update');
