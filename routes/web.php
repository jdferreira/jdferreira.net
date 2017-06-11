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

Route::get('/about', 'StaticContent@about');
Route::get('/research', 'StaticContent@research');
Route::get('/publications', 'StaticContent@publications');
Route::get('/teaching', 'StaticContent@teaching');
Route::get('/contact', 'StaticContent@contact');
Route::get('/masters', 'StaticContent@masters');

Route::get('/blog', 'Blog@home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('files', 'Admin@getFiles');
    Route::post('files', 'Admin@postFiles');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
