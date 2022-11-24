<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list(){
        $posts = Post::limit(20)->orderBy('created_at','desc')->get();

        return view('posts',['posts' => $posts]);
    }

    public function show(Post $post){

        // dd($post);
        $posts = Post::limit(20)->orderBy('created_at','desc')->get();
        return view('post',['post' => $post,'posts' => $posts]);
    }
}
