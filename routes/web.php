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
Route::get('/features', 'PagesController@getFeatures');
Route::get('/services', 'PagesController@getServices');
Route::get('/contact', 'PagesController@getContact');
Route::get('/new_post', 'PagesController@getNewPost');
Route::post('/new_post', 'PagesController@postNewPost');
Route::get('/edit_post/{id}', 'PagesController@getEditPost');
Auth::routes();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
