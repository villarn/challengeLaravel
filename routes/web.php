<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return view('welcome');
});

//Route::get('/index', [IndexController::class, 'index']);

Route::get('/index', 'App\Http\Controllers\IndexController@index');