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


Route::get('/', 'PagesController@getIndex');

Route::get('/something/{id}', 'BrandController@show');

//Route::resource('panelInsert', 'PostController');

Route::get('/panelInsert/edit/{id}', 'PostController@edit');
Route::get('/panelInsert/destroy/{id}', 'PostController@destroy');
Route::resource('panelInsert', 'PostController');
Route::post('panelInsert/store', 'PostController@store');

//Route::get('/details', 'PagesController@getDetails');
Route::get('/loadCategories', 'PagesController@loadCategories');
Route::get('/details/{id}', 'PostController@show');
Route::get('/admin_panel', 'AdminPanel@show');
Route::get('/admin_panel/loadQuestions/{id}', 'AdminPanel@loadQuestions');
Route::get('/aplog', 'AdminPanel@getAdminPanelLogin');
Route::post('/login','AdminPanel@login');
Route::get('/logout','AdminPanel@logout');

Route::get('/feed/{category}', 'FeedController@index');
Route::post('/storeQuestion','FeedController@storeQuestion');