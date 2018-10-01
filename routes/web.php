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
    Route::get('editar/{id}', 'VacancyController@edit')->name('vacancy.edit');
    Route::put('{id}', 'VacancyController@update')->name('vacancy.update');
    Route::get('deletar/{id}', 'VacancyController@destroy')->name('vacancy.destroy');
});
