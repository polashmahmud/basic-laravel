<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'First Post'],
            ['id' => 2, 'title' => 'Second Post'],
        ];

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        return view('posts.show', [
            'id' => $id
        ]);
    }
}
