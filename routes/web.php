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
session_start();

Route::any('/','Admin\LoginController@login');

Route::get('admin/code','Admin\LoginController@makecode');

Route::any('admin/quit','Admin\IndexController@quit');

Route::any('airinfo/{scence_id}','Admin\AirinfoController@get_info');

Route::group(['middleware'=>['admin.login']],function(){
    Route::get('admin/index','Admin\IndexController@index');
});
