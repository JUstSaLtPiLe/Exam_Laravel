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

Route::resource('/admin/cake','CakeController');
Route::resource('admin/category', 'CategoryController');
Route::get('/user', 'CategoryController@menu');
Route::get('/user/{type}', 'CategoryController@filter');
Route::get('/admin/cake/{id}}/quickEdit', 'CakeController@quickEdit');



