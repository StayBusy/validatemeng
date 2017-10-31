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

//get requests

Route::get('/', function(){
		return view('welcome');
});

Route::get('/logout', 'Auth\AuthController@logout');
Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/students', 'HomeController@allInstStudents');

//post requests

Route::post('/addstudent','StudentController@addstudent');
Route::post('/addInstitution','HomeController@addInstitution');
Route::post('/activateFreePlan','HomeController@activateFreePlan');
Route::post('/clearNotification','HomeController@clearNotice');

//tester

Route::get('/test','HomeController@test');






