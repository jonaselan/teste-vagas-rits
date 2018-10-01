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

// Home
Route::get('/', function () {
    return redirect('/inicio');
});
Route::get('/inicio', 'HomeController@index')->name('home');

// Authentication
Auth::routes();

// Vacancies
Route::group(['prefix' => 'vagas', 'middleware' => 'auth', 'where'=>['id'=>'[0-9]+']], function () {
    Route::get('', 'VacancyController@index')->name('vacancies');
    Route::get('criar', 'VacancyController@create')->name('vacancy.create');
    Route::post('', 'VacancyController@store')->name('vacancy.store');
    Route::get('{id}/editar', 'VacancyController@edit')->name('vacancy.edit');
    Route::put('{id}/status', 'VacancyController@change_status')->name('vacancy.change_status');
    Route::put('{id}', 'VacancyController@update')->name('vacancy.update');
    Route::get('{id}/deletar', 'VacancyController@destroy')->name('vacancy.destroy');
});

// Candidates
Route::group(['prefix' => 'curriculos', 'middleware' => 'auth', 'where'=>['id'=>'[0-9]+']], function () {
    Route::get('', 'CandidateController@index')->name('candidates');
    Route::get('{id}/status/{status}', 'CandidateController@update')->name('candidate.status');
    Route::get('deletar/{id}', 'CandidateController@destroy')->name('candidate.destroy');
});
