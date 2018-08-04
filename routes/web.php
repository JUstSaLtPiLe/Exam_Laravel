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

Route::resource('/admin/apartment','ApartmentController');
Route::resource('admin/district', 'DistrictController');
Route::get('/user', 'DistrictController@menu');
Route::get('/user/{type}', 'DistrictController@filter');
Route::get('/admin/apartment/{id}}/quickEdit', 'ApartmentController@quickEdit');



