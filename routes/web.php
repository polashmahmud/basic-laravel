<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostIndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/posts', PostIndexController::class)->name('posts.index');
