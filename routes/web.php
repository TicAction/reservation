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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);;


Route::get('/accueil', 'HomeController@index')->name('home')->middleware('verified');


//route pour les élèves

Route::get('/eleve','StudentController@index')->name('student_index')->middleware('verified');
Route::get('/eleve/creation','StudentController@create')->name('student_create')->middleware('verified');
Route::post('/eleve','StudentController@store')->name('student_store')->middleware('verified');
Route::get('/eleve/{student}','StudentController@show')->name('student_show')->middleware('verified');
Route::get('/eleve/{student}/modifier','StudentController@edit')->name('student_edit')->middleware('verified');
Route::put('/eleve/{student}','StudentController@update')->name('student_update')->middleware('verified');
Route::delete('/eleve/{student}','StudentController@destroy')->name('student_delete')->middleware('verified');

//route pour les items

Route::get('/item','ItemController@index')->name('item_index')->middleware('verified');
Route::get('/item/creation','ItemController@create')->name('item_create')->middleware('verified');
Route::post('/item','ItemController@store')->name('item_store')->middleware('verified');
Route::get('/item/{item}','ItemController@show')->name('item_show')->middleware('verified');
Route::get('/item/{item}/modifier','ItemController@edit')->name('item_edit')->middleware('verified');
Route::put('/item/{item}','ItemController@update')->name('item_update')->middleware('verified');
Route::delete('/item/{item}','ItemController@destroy')->name('item_delete')->middleware('verified');

//route pour les locations

Route::get('/location','LocationController@index')->name('location_index')->middleware('verified');
Route::get('/location/creation','LocationController@create')->name('location_create')->middleware('verified');
Route::post('/location','LocationController@store')->name('location_store')->middleware('verified');
Route::get('/location/{location}','LocationController@show')->name('location_show')->middleware('verified');
Route::get('/location/{location}/modifier','LocationController@edit')->name('location_edit')->middleware('verified');
Route::put('/location/{location}','LocationController@update')->name('location_update')->middleware('verified');
Route::delete('/location/{location}','LocationController@destroy')->name('location_delete')->middleware('verified');

//route logout dans user

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('mail','MailController@index')->name('mail');
