<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        dev_basis02
        return view('posts.index')->with(['posts'=>$post->getPaginateByLimit()]);

    }
    
}
