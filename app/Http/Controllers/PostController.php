<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    function index()
    {
        // $post = Post::all();
        $post = Post::with('category')->with('user')->get();
        return $post;
    }
}
