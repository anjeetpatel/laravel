<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => 'title 1',
                'author' => 'author 1',
                'content' => 'content of the blog post 1',
            ],
            [
                'title' => 'title 2',
                'author' => 'author 2',
                'content' => 'content of the blog post 2',
            ],
            [
                'title' => 'title 3',
                'author' => 'author 3',
                'content' => 'content of the blog post 3',
            ]
        ];

        return view('posts.index', compact('posts'));
    }
}