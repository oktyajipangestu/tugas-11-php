<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getData', 'Karyawan@getData');
Route::post('/pushData', 'Karyawan@store');
Route::post('/setData', 'Karyawan@update');
Route::get('/hapusData/{id}', 'Karyawan@delete');
Route::get('/detail/{id}', 'Karyawan@getDetail');
