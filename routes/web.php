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

Route::get('/', 'HomeController@index');
Route::get('/rooms-suites', 'HomeController@roomsSuites');
Route::get('/dining-bar', 'HomeController@diningBar');
Route::get('/aminities', 'HomeController@aminities');
Route::get('/blog', 'HomeController@blog');
Route::get('/contact', 'HomeController@contact');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');

Auth::routes();
