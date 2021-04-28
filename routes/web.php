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
    return view('auth/login');
});
Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');
// Books CRUD
Route::get('books', 'App\Http\Controllers\BooksController@index')->name('books.index')->middleware('auth');

Route::get('show/books{id}', 'App\Http\Controllers\BooksController@show')->name('books.show')->middleware('auth');

Route::get('books/create', 'App\Http\Controllers\BooksController@create')->name('create.books')->middleware('auth');
Route::post('books/store', 'App\Http\Controllers\BooksController@store')->name('books.store')->middleware('auth');

Route::get('edit/books{id}', 'App\Http\Controllers\BooksController@edit')->middleware('auth');
Route::post('update/books{id}', 'App\Http\Controllers\BooksController@update')->middleware('auth');

Route::get('delete/books{id}', 'App\Http\Controllers\BooksController@delete')->middleware('auth');

// Authors CRUD
Route::get('authors', 'App\Http\Controllers\AuthorsController@index')->name('authors.index')->middleware('auth');

Route::get('show/authors{id}', 'App\Http\Controllers\AuthorsController@show')->name('authors.show')->middleware('auth');

Route::get('authors/create', 'App\Http\Controllers\AuthorsController@create')->name('create.authors')->middleware('auth');
Route::post('authors/store', 'App\Http\Controllers\AuthorsController@store')->name('authors.store')->middleware('auth');

Route::get('edit/authors{id}', 'App\Http\Controllers\AuthorsController@edit')->middleware('auth');
Route::post('update/authors{id}', 'App\Http\Controllers\AuthorsController@update')->middleware('auth');

Route::get('delete/authors{id}', 'App\Http\Controllers\AuthorsController@delete')->middleware('auth');
// Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
