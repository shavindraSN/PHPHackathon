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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Main Routes
Route::get('login', 'PagesController@showLoginPage');
Route::get('admin', 'HomeController@index');
Route::get('register', 'PagesController@showRegisterPage');
//End of Main Routes


//Sample Routes
Route::get('sample', 'PagesController@showSamplePage');
Route::post('addSample', 'SampleController@addSample');
Route::post('updateSample', 'SampleController@updateSample');
Route::get('deleteSample{id}', 'SampleController@deleteSample');
Route::get('updateSample{id}', 'SampleController@showUpdateSample');
//End of Sample Routes


//Pages direction Routes are Below
//Customer Routes
Route::get('customer', 'PagesController@showCustomerPage');
Route::get('customerOrders', 'PagesController@showCustomerOrdersPage');
//End of Customer Routes

