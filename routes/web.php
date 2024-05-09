<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return "Home Page";
});

Route::get('/about-us', function () {
   return "About Page";
})->name('about');
