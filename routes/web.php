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

Route::get('/', 'HomeController@index')->name('home');


//Q/A Routes
Route::get('/course/{subchapter_id}/add_question', 'CoursesController@add_question');
Route::get('/course/{question_id}/add_answer', 'CoursesController@add_answer');

//Courses Routes
Route::get('/{category}/courses', 'CoursesController@get_category_courses');
Route::get('/courses', 'CoursesController@get_courses');
Route::get('/my_courses', 'CoursesController@get_my_courses')->middleware('auth');

//Add Course
Route::get('/course/add', function(){
    return view('courses.add_course');
})->middleware('auth');
Route::post('/course/add/new', 'CoursesController@add_course');

//Get Single course
Route::get('/course/{slug}', 'CoursesController@get_course');

//Enroll/UnEnroll
Route::get('/course/{slug}/enroll', 'CoursesController@enroll')->middleware('auth', 'isNotEnrolled');
Route::get('/course/{slug}/unenroll', 'CoursesController@unenroll')->middleware('auth', 'isEnrolled');

//View Course
Route::get('/course/{slug}/view&id={subchapter_id}', 'CoursesController@get_subchapter');
Route::get('/course/{slug}/view/{subchapter_id?}', 'CoursesController@view_course')->middleware('auth', 'isEnrolled');
Route::get('/download/{resource}', 'CoursesController@download');

//Profile Routes
Route::get('/profile', 'ProfileController@profile')->middleware('auth');

//Auth
Route::get('/logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Auth::routes();
