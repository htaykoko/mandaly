<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/doctors', 'HomeController@doctors')->name('doctors');

Route::get('/services', 'HomeController@services')->name('services');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::resource('blogs', 'BlogController');

Route::get('/pricing', 'HomeController@pricing')->name('pricing');

Route::get('/history', 'HomeController@history')->name('history');

Route::get('/appointment', 'AppointmentController@index')->name('appointment');

Route::post('/appointment', 'AppointmentController@store')->name('appointments.store');

// admin page
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('home', 'Admin\HomeController@index')->name('admin.home');

    Route::resource('doctors', 'Admin\DoctorController', ['as' => 'admin']);

    Route::resource('specialist', 'Admin\SpecialistController', ['as' => 'admin']);

    Route::resource('blogs', 'Admin\BlogController', ['as' => 'admin']);

    Route::resource('appointments', 'Admin\AppointmentController', ['as' => 'admin']);

});
