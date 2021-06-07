<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::get('/students', 'App\Http\Controllers\StudentsController@index')->name('student.index');
Route::get('/createstudents','App\Http\Controllers\StudentsController@create')->name('student.create');
Route::post('/storestudents','App\Http\Controllers\StudentsController@store')->name('student.store');
Route::get('/editstudents/{student}','App\Http\Controllers\StudentsController@edit')->name('student.edit');
Route::post('/updatestudents/{student}','App\Http\Controllers\StudentsController@update')->name('student.update');
Route::delete('/deletestudents/{student}','App\Http\Controllers\StudentsController@destroy')->name('student.destroy');

Route::post('/students', 'App\Http\Controllers\StudentsController@index')->name('student.index');