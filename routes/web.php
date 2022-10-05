<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'ComicsController@index') -> name('home');
Route::resource('Library', 'ComicsController');