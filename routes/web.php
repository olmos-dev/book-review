<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Database\Factories\BookFactory;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name("books.index");
Route::get('/book/{book}',[BookController::class,'show'])->name("book.show");
