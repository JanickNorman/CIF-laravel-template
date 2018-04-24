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

Route::post('integration/admin', 'IntegrationController@admin');
Route::post('integration/pull', "IntegrationController@pull");
Route::get('integration/clickthrough', "IntegrationController@clickthrough");
Route::post('integration/channelback', "IntegrationController@channelback");
