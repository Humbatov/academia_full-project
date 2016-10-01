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






Route::auth();
Route::get('user/{id}/{name}{surname}','PagesController@userprofile');


Route::group(['middleware' => 'auth' ] , function(){

    Route::get('settings/account-removal','SettingsController@removal');
    Route::get('settings','SettingsController@account');

    Route::get('search/documents','SearchController@searchDocument');
    Route::get('search/peoples','SearchController@searchPeople');
    Route::get('search','SearchController@index');
    Route::resource('settings/account-removal','SettingsController@removal');
    Route::resource('settings','SettingsController@account');


    Route::resource('fileDetails','PagesController@fileDetails');

});

Route::get('fileUpload','PagesController@fileUpload');
Route::get('/{name}{surname}','PagesController@myprofile');

Route::get('/','PagesController@index');

/*--------Create Post---------*/
Route::post('post/create','FileController@store');
Route::get('post/new','FileController@postEdit');
/*--------Search---------*/
Route::get('search/interest/{id}/people','SearchController@searchPeople');
Route::get('search/interest/{id}/documents','SearchController@searchDocument');
Route::get('search','SearchController@index');



Route::get('/home', 'HomeController@index');

/*---------------------Admin--------------------- */
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/userList', 'Admin\AdminController@userList');
Route::post('/admin/userList/{id}', 'UserController@destroy');
Route::get('/admin/userList/{id}/interests', 'Admin\AdminController@interests');
Route::post('/admin/user/file/{id}', 'FileController@destroy');
Route::get('/admin/user/{id}/files', 'Admin\AdminController@files');
Route::get('/admin/user/{id}', 'Admin\AdminController@user');
Route::patch('/admin/user/{id}/update', 'UserController@update');
