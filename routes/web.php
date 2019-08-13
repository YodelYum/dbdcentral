<?php

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
    return view('main',['route' => '/']);
});





Route::get('/survivors', 'SurvivorsController@index');

Route::get('/killers', 'KillersController@index');

Route::get('/perks', 'PerksController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
