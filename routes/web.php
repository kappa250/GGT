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

Route::get('/login', function () {
    return view('Auth.login');
});

Route::get('/create', function () {
    return view('users.create');
});

Route::get('/edit', function () {
    return view('users.edit');
});

Route::get('/index', function () {
    return view('users.index');
});

Route::get('/show', function () {
    return view('users.show');
});

Route::get('/contact_about', function () {
    return view('pages.contact_about');
});

Route::get('/teacher', function () {
    return view('pages.teachers');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
