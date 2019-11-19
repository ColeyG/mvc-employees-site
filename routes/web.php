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

Route::get('/', 'EmployeesController@index')->name('home');

Route::get('/about', 'EmployeesController@about')->name('about');

Route::get('/manage', 'EmployeesController@manage')->name('manage');

Route::get('/contact', 'EmployeesController@contact')->name('contact');

Route::get('/employee', 'EmployeesController@employee');

Route::delete('employees/{employee}', 'EmployeesController@destroy');
