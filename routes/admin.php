<?php

use App\Livewire\Admin\Category;
use App\Livewire\Admin\Home;
use Illuminate\Support\Facades\Route;

Route::get('/home', Home::class)->name('home');
Route::get('/category', Category::class)->name('category');
