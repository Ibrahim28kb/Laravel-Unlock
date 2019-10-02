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

Route::get('/','HomeController@homepage');

Route::get('/welcome/{name?}','HomeController@welcome');

Route::get('/about','AboutController@about');
Route::get('/about/who-we-are','AboutController@whoWeAre');
Route::get('/services','HomeController@services');
Route::get('/contact','ContactController@contact');
Route::get('/contact/send-message','ContactController@sendMessage');

Route::get('categories','CarController@categories');
Route::get('car-classes/{categoryId}','CarController@carClasses');
Route::get('order/{carId}/{customerName}','CarController@order');
