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

Route::resource('orden','OrdenController');
Route::get('reclamo/create/{qid}', array('as' => 'crearreclamo', 'uses' => 'ReclamoController@create'));
Route::resource('reclamo','ReclamoController');
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
