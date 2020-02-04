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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/doctors', 'HomeController@doctors')->name('doctors');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/blogs', 'HomeController@blogs')->name('blogs');

Route::get('/pricing', 'HomeController@pricing')->name('pricing');

Route::get('/appointment', 'HomeController@appointment')->name('appointment');

