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

Route::get('/','PageControllers@index');
Route::get('/login','PageControllers@login');
Route::get('/dashboard','PageControllers@dashboard');
Route::get('/create_team','PageControllers@create_team');
Route::get('/join_student','PageControllers@join_student');
Route::get('/team','PageControllers@team');
Route::get('/logout','PageControllers@logout');
Route::get('/score','PageControllers@score');


Route::post('/ver','PageControllers@ver');
Route::post('/team ver','PageControllers@team_ver');
Route::post('/join_ver','PageControllers@join_ver');


