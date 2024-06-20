<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        dd(Post::find(1));
        $posts = Post::where('is_published', 1)->get();
//        $posts = Post::all();
        foreach ($posts as $post) {
            dump($post->title);
        }
        return Post::all();
    }

}
