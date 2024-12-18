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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('frontend.pages.overview');
});

Route::get('/badges', function () {
    return view('frontend.pages.badges');
});

Route::get('/tasks', function () {
    return view('frontend.pages.tasks');
});

Route::get('/events', function () {
    return view('frontend.pages.events');
});

Route::get('/marketplace', function () {
    return view('frontend.pages.marketplace');
});
