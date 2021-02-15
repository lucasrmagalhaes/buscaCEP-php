<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\EnderecoController@index')->name('home');

Route::get('/adicionar', 'App\Http\Controllers\EnderecoController@adicionar')->name('adicionar');

Route::get('/buscar', 'App\Http\Controllers\EnderecoController@buscar')->name('buscar');

Route::post('/salvar', 'App\Http\Controllers\EnderecoController@salvar')->name('salvar');