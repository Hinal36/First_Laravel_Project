<?php

use Illuminate\Support\Facades\Route;

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

#StudioController Routes
Route::get('/', 'studiocontoller@index');
Route::get('/about','studiocontoller@aboutus');
Route::get('/contact','studiocontoller@contact');
Route::get('/services','studiocontoller@services');

#TestControllers Routes
// Route::get('user/{id}','TestController@index')->where('id','[0-9]+')->name('profile');
/*Route::get('student','TestController@index');
Route::get('student/create','TestController@create');
Route::get('student/{id}','TestController@show');
Route::post('student/store','TestController@store')->name('student_add');*/

#Resource Controller: StudentsControllers Route
/*Route::get('student','StudentsController@index');
Route::get('student/create','StudentsController@create');
Route::get('student/{id}','StudentsController@show');
Route::post('student/store','StudentsController@store')->name('student.store');
Route::get('student/{id}/edit','StudentsController@edit');
Route::post('student/{id}','StudentsController@update')->name('student.update');*/

#resource controller
Route::resource('student','studentsController');

?>