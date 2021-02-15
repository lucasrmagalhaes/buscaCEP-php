<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\EnderecoController@index')->name('home');

Route::get('/buscar', 'App\Http\Controllers\EnderecoController@buscar')->name('buscar');