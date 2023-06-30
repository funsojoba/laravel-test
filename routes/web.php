<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'App\Http\Controllers\ClassController@index');
Route::get("/login/{id}", 'App\Http\Controllers\ClassController@show');
Route::get("/form", 'App\Http\Controllers\ClassController@getForm');
Route::post("/form", 'App\Http\Controllers\ClassController@store');