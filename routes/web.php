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



     Route::get('/',function(){

            return view ('welcome');
     });
     

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/student','stuedentController@index');

// Route::get('/student/create','stuedentController@create');
// Route::post('/student/create', 'stuedentController@store')->name('addstudent');
// Route::get('/student/show/{id}','stuedentController@show')->name('student.show');

// Route::get('/student/edit/{id}','stuedentController@send')->name('info.student');

// Route::put('/student/edit/{id}','stuedentController@update')->name('update.student');

// Route::delete('student/{id}','stuedentController@destroy')->name('s.delete');
