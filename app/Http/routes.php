<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/search1', function () {
    return view('search1');
});
Route::get('/search1', function () {
    return view('search2');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/settingsAccount', function () {
    return view('removeAc');
});
Route::get('/settingsRemove', function () {
    return view('settingsRemove');
});
Route::get('/signUp', function () {
    return view('signUp');
});
