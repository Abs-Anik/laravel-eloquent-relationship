<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Category
Route::get('/category/create', 'CategoryController@create')->name('category-create');
Route::post('/category/store', 'CategoryController@store')->name('category-store');
Route::get('/postlist/in/category/{id}', 'CategoryController@postList')->name('post-in-category');
// Post
Route::post('/post/store', 'PostController@store')->name('post-store');
//Tag
Route::get('/tag/create', 'TagController@create')->name('tag-create');
Route::post('/tag/store', 'TagController@store')->name('tag-store');