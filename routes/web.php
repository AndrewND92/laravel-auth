<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('emp.index');

Route::get('/show/{id}', 'GuestController@show') -> name('emp.show');
