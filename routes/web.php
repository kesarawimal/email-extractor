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
    return view('welcome');
});

Route::get('/mail', 'MailController@mail');
Route::get('/search', 'SearchController@search');
Route::get('/bulk', 'BulkDomains@findURL');
Route::get('/key', 'BulkKeywords@findKeywords');