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

/*Route::get('/', function () {
    return view('dashboard.dashboard');
});*/

//login 
Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::get('/login',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses'=>'LoginController@postLogin']);
Route::get('/logout',['as'=>'logout','uses'=>'LoginController@getLogout']);
Route::get('/dashboard','eloquent_controller@show_all_students')->name('dashboard');

//eloquent
Route::get('/show_all_students','eloquent_controller@show_all_students')->name('show_all_students');
Route::get('/show_all_students_18','eloquent_controller@show_all_students_18')->name('show_all_students_18');
Route::get('/show_class','eloquent_controller@show_class')->name('show_class');
Route::get('/search_id','eloquent_controller@show_id')->name('search_id');
Route::post('/search_id_p','eloquent_controller@show_id_p')->name('search_id_p');
Route::get('/parents_show','eloquent_controller@show_parents_students')->name('parents_show');

//course

Route::get('/create_course','course_controller@create')->name('create_course');
Route::post('/create_course_p','course_controller@store')->name('create_course_p');
Route::get('/edit_course/{id}','course_controller@edit')->name('edit_course');
Route::post('/edit_course_p/{id}','course_controller@update')->name('edit_course_p');
Route::get('/delete_course/{id}','course_controller@destroy')->name('delete_course');

//parents
Route::get('/create_parents','parents_controller@create')->name('create_parents');
Route::post('/create_parents_p','parents_controller@store')->name('create_parents_p');
Route::get('/edit_parent/{id}','parents_controller@edit')->name('edit_parent');
Route::post('/edit_parent_p/{id}','parents_controller@update')->name('edit_parent_p');
Route::get('/delete_parent/{id}','parents_controller@destroy')->name('delete_parent');
//student

Route::get('/create_student','student_controller@create')->name('create_student');
Route::post('/create_student_p','student_controller@store')->name('create_student_p');
Route::get('/edit_student/{id}','student_controller@edit')->name('edit_student');
Route::post('/edit_student_p/{id}','student_controller@update')->name('edit_student_p');
Route::get('/delete_student/{id}','student_controller@destroy')->name('delete_student');

//email
Route::get('/email','email_controller@create')->name('email');
Route::post('/email_p','email_controller@send_email')->name('email_p');