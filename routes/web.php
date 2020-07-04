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
    return view('viewA');
});

Route::get('/pertanyaan/create','PertanyaanController@create');
Route::get('/pertanyaan','PertanyaanController@index');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/a',function(){
    return view('frontview');
});

Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@create');