<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [BookController::class, 'index'])->name('books.index');

Route::get('/show_book_details', [BookController::class, 'show'])->name('books.show');

Route::get('/add-comment', [BookController::class, 'addComment'])->name('addComment');
Route::post('/add-comment', [BookController::class, 'addCommentstore'])->name('addCommentstore');

Route::get('/add-rating', [BookController::class, 'addRating'])->name('addRating');
Route::post('/add-rating', [BookController::class, 'addRatingstore'])->name('addRatingstore');
