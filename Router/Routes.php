<?php

use App\Controllers\Api\Admin;
use App\Controllers\Api\Evaluation;
use App\Controllers\Api\Location;
use App\Controllers\Auth\Users;
use Core\Router\Router as Route;

Route::get('', 'home@index');

Route::post('auth/login', [Users::class, "login"]);
Route::post('user', [Evaluation::class, "save-user"]);
// Route::post('evaluate', [Evaluation::class, "evaluate-property"]);
Route::post('evaluate', [Evaluation::class, "property-data-valuation"]);
Route::get('forms', [Admin::class, "valuation-forms"]);
Route::put('admin/form', [Admin::class, "update-form"]);
Route::get('admin/users', [Admin::class, "users"]);
Route::get('admin/users-export', [Admin::class, "export-users"]);
Route::get('admin/user-valuation', [Admin::class, "user-valuation"]);
Route::get('zipcode-lookup', [Location::class, "lookup-zipcode"]);
Route::post('send-valuation/{id:[\d]+}', [Evaluation::class, "sendCopy"]);