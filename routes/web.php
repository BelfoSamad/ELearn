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

Route::get('/', 'HomeController@index');

//Courses Routes
Route::get('/course/add', function(){
    return view('add_course');
})->middleware('auth', 'isTeacher');
Route::post('/course/add/new', 'CoursesController@add_course');
Route::get('/my_courses', 'CoursesController@get_courses')->middleware('auth');
Route::get('/course/{slug}', 'CoursesController@get_course');
Route::get('/course/{slug}/enroll', 'CoursesController@enroll')->middleware('auth', 'isStudent');
Route::get('/course/{slug}/view/{subchapter_id?}', 'CoursesController@view_course')->middleware('auth');

//Profile Routes
Route::get('/course/profile', 'ProfileController@profile')->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
