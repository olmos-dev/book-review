<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {

    $books = Book::title('tempora')->toSql();
    return dd($books);

    return view('welcome');
});
