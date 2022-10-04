<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'HomeController@home') -> name('home');
Route::get('/details/{id}', 'HomeController@details') -> name('details');