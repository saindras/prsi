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

/*Route::get('/', function () {
    //return view('welcome');
    return 'Welcome to our home page!';
});*/

Route::get('/', 'PagesController@home');
Route::get('/halamanInput', 'dataPesertaController@create');
Route::post('/halamanInput', 'dataPesertaController@store');
Route::get('/contact', 'PagesController@contact');

Route::get('/listPeserta', 'dataPesertaController@index');
Route::get('/listPeserta/get-dataPeserta', 'dataPesertaController@getDataPeserta');

Route::get('/detilPeserta/{slug?}', 'dataPesertaController@show');
Route::get('/detilPeserta/{slug?}/edit','dataPesertaController@edit');
Route::post('/detilPeserta/{slug?}/edit','dataPesertaController@update');
Route::post('/detilPeserta/{slug?}/delete','dataPesertaController@destroy'); 