<?php

# index
Route::get('/', 'indexController@index');

# login/logout
Route::get('login', 'Auth\LoginController@redirectToProvider')->name('login');
Route::get('login/senhaunica/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

# Disciplina
Route::resource('/cursos', 'CursoController');

# Turmas
Route::get('cursos/{curso_id}/turmas/create','TurmaController@create');
Route::post('cursos/{curso_id}/turmas','TurmaController@store');

# subscriptions
Route::get('cursos/{curso_id}/turmas/{turma_id}/subscription', 'TurmaController@subscription');
Route::post('cursos/{curso_id}/turmas/{turma_id}/subscription', 'TurmaController@subscriptionStore');
