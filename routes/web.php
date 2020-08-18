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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/departamentos', 'DepartamentoController@index')->name('departamento');
Route::prefix('departamentos')->middleware('auth')->group(function(){
    Route::post('/store', 'DepartamentoController@store')->name('departamentoStore');
    Route::get('/create', 'DepartamentoController@create')->name('departamentoCreate');
});