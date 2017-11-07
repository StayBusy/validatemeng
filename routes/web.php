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
    return view('welcome');
});

Auth::routes();


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

Route::get('/test','InstitutionController@getInstStudents');
