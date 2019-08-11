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



Route::get('/survivors', function () {
     $survs = DB::table('survivors')->get();
    return view('survivors', ['survs' => $survs,
                              'route' => 'survivors']);
});

Route::get('/killers', function () {
     $killers = DB::table('killers')->get();
    return view('killers', ['killers' => $killers,
                            'route' => 'killers']);
});
