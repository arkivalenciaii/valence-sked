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

Route::get('/', ['middleware' => 'auth', 'uses' => 'WelcomeController@set']);
Route::get('messages', [
    'middleware' => 'auth',
    'uses' => 'MessagesController@index'
]);
Route::get('messages/{from}', [
    'middleware' => 'auth',
    'uses' => 'MessagesController@show'
]);
Route::get('flash','TestController@flash');
Route::get('dashboard','DashboardController@index');
Route::get('mamee/{name}', 'TestController@flash');
//Route::get('login' 'AuthController@login');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
