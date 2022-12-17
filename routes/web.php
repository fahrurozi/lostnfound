<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/user', 'UserController@index')->name('dashboard.index');

Route::get('/login', 'RegisterController@login')->name('login.index');
Route::post('/post_login', 'RegisterController@post_login')->name('login.post_login');

Route::get('/logout', 'RegisterController@logout')->name('logout');

Route::get('/register', 'RegisterController@register')->name('register.index');
Route::post('/post_register', 'RegisterController@post_register')->name('register.post_register');


