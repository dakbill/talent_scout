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
    return view('welcome');
});

Route::group(['as' => 'talents::','namespace' => 'Api','prefix' => 'talents'], function () {
    Route::get('', ['as' => 'index','uses' => 'TalentsController@index']);
    Route::get('soccer', ['as' => 'soccer','uses' => 'TalentsController@soccer']);
    Route::get('basketball', ['as' => 'basketball','uses' => 'TalentsController@basketball']);
});
