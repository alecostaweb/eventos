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

# index
Route::get('/', 'indexController@index');

# login/logout
Route::get('login', 'Auth\LoginController@redirectToProvider');
Route::get('login/senhaunica/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('logout', 'Auth\LoginController@logout');

# Disciplina
Route::resource('/cursos', 'CursoController');

# Turmas
Route::get('/cursos/{curso_id}/turmas/create','TurmaController@create');
Route::post('/cursos/{curso_id}/turmas','TurmaController@store');
