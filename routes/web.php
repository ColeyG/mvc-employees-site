<?php

Route::get('/', 'EmployeesController@index')->name('home');

Route::get('/about', 'EmployeesController@about')->name('about');

Route::get('/manage', 'EmployeesController@manage')->name('manage');

Route::get('/contact', 'EmployeesController@contact')->name('contact');

Route::get('/employee/{employee}', 'EmployeesController@employee')->name('employee');

Route::delete('employees/{employee}', 'EmployeesController@destroy');

Route::post('/contactMessage', 'ContactController@send')->name('contactMessage');

Route::post('/search', 'EmployeesController@search')->name('search');
