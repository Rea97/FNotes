
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
    return view('sections.main.index');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Home
Route::group(['middleware' => 'auth'], function() {
    Route::get('/notes', 'NotesController@index');
    Route::get('/note/{id}', 'NotesController@show');
    Route::post('note', 'NotesController@store');
    Route::put('note/{note}', 'NotesController@update');
    Route::delete('note/{note}', 'NotesController@destroy');
    Route::get('/account', 'AccountController@index');
});
