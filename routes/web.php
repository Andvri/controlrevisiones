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
    return view('welcome',[ "links" => ["https://google.com" => "google"]] );
});
Route::get('/solicitar_revision', 'RevisionsController@showregistro');
Route::post('/solicitar_revision/create', 'RevisionsController@create');

Auth::routes();
