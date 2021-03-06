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


Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->('dashboard');
Route::get('/students', 'HomeController@allInstStudents')->name('students.list');

//post requests

Route::post('/addstudent','StudentController@addstudent');
Route::post('/addInstitution','HomeController@addInstitution')->name('institution.add');
Route::post('/activateFreePlan','HomeController@activateFreePlan')->name('activeplan.free');
Route::post('/clearNotification','HomeController@clearNotice')->name('notice.clear');

//tester

Route::get('/test','InstitutionController@getInstStudents')->name('institution.students.list');
