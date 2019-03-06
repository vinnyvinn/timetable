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

Auth::routes();

Route::get('/', 'TeachersController@index')->name('home');
Route::resource('teachers','TeachersController');
Route::get('teachers/delete/{id}','TeachersController@destroy');
Route::resource('schools','SchoolsController');
Route::get('schools/delete/{id}','SchoolsController@destroy');
Route::resource('subjects','SubjectsController');
Route::get('/subjects/delete/{id}','SubjectsController@destroy');
Route::resource('classes','ClassesController');
Route::get('classes/delete/{id}','ClassesController@destroy');
Route::resource('lessons','ScheduleLessonsController');
Route::get('/lessons/delete/{id}','ScheduleLessonsController@destroy');
Route::get('sms','SendMessagesController@index');
