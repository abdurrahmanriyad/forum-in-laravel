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

Route::get('/', 'HomeController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')->group(function () {
    Route::get('user/{id}/profile', 'DashboardController@index');
    Route::resource('user/questions', 'QuestionController');
});


Route::get('logout', 'Auth\LoginController@logout');

Route::get('askquestion', 'QuestionController@askQuestion');
