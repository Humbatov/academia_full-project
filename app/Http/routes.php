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

Route::resource('/','PagesController@index');
Route::resource('home','PagesController@home');
Route::resource('login','PagesController@login');
Route::resource('signUp','PagesController@signUp');
Route::resource('search/documents','SearchController@searchDocument');
Route::resource('search/peoples','SearchController@searchPeople');
Route::resource('search','SearchController@index');
Route::resource('settings/account-removal','SettingsController@removal');
Route::resource('settings','SettingsController@account');
