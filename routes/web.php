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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/category', 'CategoryController@index')->name('category');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/regular-page', 'regularPageController@index')->name('regular-page');

Route::get('/single-blog', 'singleBlogController@index')->name('single-blog');


