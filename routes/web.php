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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('ideas', 'IdeaController');

Route::prefix('mypage')->middleware(['auth'])->group(function() {
Route::get('ideas', 'IdeaController@userIndex')->name('mypage.ideas');
});

Auth::routes();

