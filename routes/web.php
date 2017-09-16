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


Route::get('/', 'LoadController@show');

Route::get('/something/{id}', 'BrandController@show');

//Route::resource('panelInsert', 'PostController');

Route::resource('panelInsert', 'PostController');

Route::get('/home', 'PagesController@getIndex');
