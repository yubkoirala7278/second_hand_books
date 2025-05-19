<?php

use App\Livewire\Public\Book;
use App\Livewire\Public\BookDetail;
use App\Livewire\Public\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/book', Book::class)->name('book');
Route::get('/book-details/{slug}', BookDetail::class)->name('book-detail');