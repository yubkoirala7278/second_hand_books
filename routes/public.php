<?php

use App\Livewire\Public\Book;
use App\Livewire\Public\BookDetail;
use App\Livewire\Public\ChatConversation;
use App\Livewire\Public\ChatUser;
use App\Livewire\Public\Home;
use App\Livewire\Public\ManageBooks;
use App\Livewire\Public\Profile;
use App\Livewire\Public\SellBook;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/book', Book::class)->name('book');
Route::get('/book_details/{slug}', BookDetail::class)->name('book-detail');
Route::get('/sell_book', SellBook::class)->name('sell-book');
Route::get('/manage_books', ManageBooks::class)->name('manage-books');
Route::get('/profile', Profile::class)->name('profile');
Route::get('/chat', ChatUser::class)->name('chat');
Route::get('/chat/conversation', ChatConversation::class)->name('chat-conversation');
