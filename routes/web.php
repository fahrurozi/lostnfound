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

Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/lostnfounditem', 'AdminController@lostnfounditem')->name('admin.lostnfounditem');
Route::get('/admin/lostnfounditem/edit/{id}', 'AdminController@edit_data')->name('admin.lostnfounditem.edit_data');
Route::put('/admin/lostnfounditem/update/{id}', 'AdminController@update_data')->name('admin.lostnfounditem.update_data');
Route::post('/admin/lostnfounditem/delete/{id}', 'AdminController@delete_data')->name('admin.lostnfounditem.delete_data');

Route::get('/create_report', 'ReportController@create_report')->name('report.create_report');
Route::get('/post_report', 'ReportController@post_report')->name('report.post_report');