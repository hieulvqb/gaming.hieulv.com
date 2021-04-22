<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('index');
Route::get('/stick-hero', 'HomeController@stickHero')->name('stickHero');
