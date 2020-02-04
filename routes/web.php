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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/doctors', 'HomeController@doctors')->name('doctors');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/blogs', 'HomeController@blogs')->name('blogs');

Route::get('/pricing', 'HomeController@pricing')->name('pricing');

Route::get('/history', 'HomeController@history')->name('history');

Route::get('/appointment', 'HomeController@appointment')->name('appointment');

// admin page
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('home', 'Admin\HomeController@index')->name('admin.home');

    Route::resource('doctors', 'Admin\DoctorController', ['as' => 'admin']);

    Route::resource('specialist', 'Admin\SpecialistController', ['as' => 'admin']);

});
