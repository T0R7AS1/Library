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
Route::get('/dashboard', function(){
    return view('dashboard');
});
// Books CRUD
Route::get('books', 'App\Http\Controllers\BooksController@index')->name('books.index');

Route::get('show/books{id}', 'App\Http\Controllers\BooksController@show')->name('books.show');

Route::get('books/create', 'App\Http\Controllers\BooksController@create')->name('create.books');
Route::post('books/store', 'App\Http\Controllers\BooksController@store')->name('books.store');

Route::get('edit/books{id}', 'App\Http\Controllers\BooksController@edit');
Route::post('update/books{id}', 'App\Http\Controllers\BooksController@update');

Route::get('delete/books{id}', 'App\Http\Controllers\BooksController@delete');

// Authors CRUD
Route::get('authors', 'App\Http\Controllers\AuthorsController@index')->name('authors.index');

Route::get('show/authors{id}', 'App\Http\Controllers\AuthorsController@show')->name('authors.show');

Route::get('authors/create', 'App\Http\Controllers\AuthorsController@create')->name('create.authors');
Route::post('authors/store', 'App\Http\Controllers\AuthorsController@store')->name('authors.store');

Route::get('edit/authors{id}', 'App\Http\Controllers\AuthorsController@edit');
Route::post('update/authors{id}', 'App\Http\Controllers\AuthorsController@update');

Route::get('delete/authors{id}', 'App\Http\Controllers\AuthorsController@delete');
