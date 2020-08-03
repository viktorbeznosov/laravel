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

Route::get('/', 'SiteController@index');

Auth::routes();

Route::get('/admin/login',['as' => 'admin.login','uses' => 'Admin\Auth\LoginController@showLoginForm']);
Route::post('/admin/login',['uses' => 'Admin\Auth\LoginController@login']);
Route::get('/admin/logout',['as' => 'admin.logout','uses' => 'Admin\Auth\LoginController@logout']);

Route::group(['prefix' => 'admin','as' => 'admin.', 'middleware' => 'isAdmin'], function (){
    Route::get('/', 'Admin\AdminController@index')->name('dashboard');
});