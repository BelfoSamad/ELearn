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

//Courses Routes
Route::get('/{category}/courses', 'CoursesController@get_category_courses');
Route::get('/courses', 'CoursesController@get_courses');
Route::get('/my_courses', 'CoursesController@get_my_courses')->middleware('auth');

Route::get('/course/add', function(){
    return view('courses.add_course');
})->middleware('auth', 'isTeacher');
Route::post('/course/add/new', 'CoursesController@add_course');

Route::get('/course/{slug}', 'CoursesController@get_course');

Route::get('/course/{slug}/enroll', 'CoursesController@enroll')->middleware('auth', 'isStudent');
Route::get('/course/{slug}/unenroll', 'CoursesController@unenroll')->middleware('auth', 'isStudent');

Route::get('/course/{slug}/view/{subchapter_id?}', 'CoursesController@view_course')->middleware('auth');
Route::get('/download/{resource}', 'CoursesController@download');

//Profile Routes
Route::get('/profile', 'ProfileController@profile')->middleware('auth');

//Auth
Route::get('/reg', function () {
    return view('register');
});
Route::get('/logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Auth::routes();
