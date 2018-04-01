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

Route::get('/mail', function () {
    return view('domain');
});
Route::post('/mail', 'MailController@mail');
Route::get('/search', 'SearchController@search');
Route::get('/bulk', 'BDomainController@findURL');
Route::get('/key', 'BKeywordController@findKeywords');
Route::get('/bulkmails', 'BMailController@findMails');
Route::get('/uploadfile','BDomainController@index');
Route::post('/uploadfile','BDomainController@showUploadFile');