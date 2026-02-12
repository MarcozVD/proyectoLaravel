<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/marcos', function () {
    return "marcos el pro";
});

Route::get('/php-basico', function () {
    
    return ;
    
});
