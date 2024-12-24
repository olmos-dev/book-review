<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Database\Factories\BookFactory;

Route::get('/', function () {
    return redirect()->route('books.index');
});

Route::get('/books', [BookController::class, 'index'])->name("books.index");
Route::get('/book/{book}',[BookController::class,'show'])->name("book.show");

Route::resource('books.reviews', ReviewController::class)
    ->scoped(['review' => 'book'])
    ->only(['create', 'store']);
