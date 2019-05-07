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
Route::get('/hoteis', 'HomeController@hoteis');
Route::get('/quemsomos', 'HomeController@quemsomos');
Route::get('/blog', 'HomeController@blog');
Route::get('/contact', 'HomeController@contact');

Route::get('/login', 'HomeController@login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/register', 'HomeController@register');
Route::get('/conheca', 'HomeController@conheca');
Route::get('/faq', 'HomeController@faq');


Auth::routes();
