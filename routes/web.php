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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/film', function () {
//     $namaHalaman = 'Halaman Film yang baroe..';
//     return view('film', ['namaHalaman' => $namaHalaman]);
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Route::get('/film', 'FilmController@index');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');