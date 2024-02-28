<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');
Route::get('/contact', 'App\Http\Controllers\ContactController@showForm')->name('contact');
Route::post('/contact', 'App\Http\Controllers\ContactController@store')->name('contact.store');
Route::resource('images', 'App\Http\Controllers\ImageController');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
