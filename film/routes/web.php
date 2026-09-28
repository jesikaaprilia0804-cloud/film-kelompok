<?php

use App\Http\Controllers\MovieController;
Route::resource('movies', MovieController::class);

Route::get('/', function () {
    return view('welcome');
});
