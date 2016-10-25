<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**
 * 前台路由器
 */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@home');

/**
 * 作者中心路由器
 */

/**
 * 管理后台路由器
 */
Route::get('/admin/login', 'Admin\LoginController@login');
Route::get('/admin/code', 'Admin\LoginController@code');
Route::post('/admin/login', 'Admin\LoginController@loginPost');
Route::get('/admin/out', 'Admin\LoginController@out');
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'Admin\IndexController@dashboard');
    Route::get('/dashboard', 'Admin\IndexController@dashboard');
});