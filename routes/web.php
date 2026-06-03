<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    logger('Test');
    return view('welcome');
});
