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
//     return view('welcome');
// });

// Route::get('/about', function () {
//     $msg = 'made by love~';
//     return view('about',['msg'=> $msg]);
// });

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/mahasiswa', 'MhsController@index');