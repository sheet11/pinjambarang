<?php

namespace App\Http\Controllers;

use app\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        //get post
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }
}
