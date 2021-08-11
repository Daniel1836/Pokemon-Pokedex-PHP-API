<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\PokemonController@index');
Route::get('next/{id}', 'App\Http\Controllers\PokemonController@index');
Route::get('previous/{id}', 'App\Http\Controllers\PokemonController@index');
Route::post('search', 'App\Http\Controllers\PokemonController@search');
Route::get('getpokemon/{id}', 'App\Http\Controllers\PokemonController@getPokemon');


