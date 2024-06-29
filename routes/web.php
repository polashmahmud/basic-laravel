<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostIndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/posts', PostIndexController::class)->name('posts.index');
