<?php

use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
   $posts = [
     ['id' => 1, 'title' => 'First Post'],
     ['id' => 2, 'title' => 'Second Post'],
   ];

   return view('posts.index', [
       'posts' => $posts
   ]);
});

Route::get('/posts/{id}', function ($id) {
   return view('posts.show', [
       'id' => $id
   ]);
});
