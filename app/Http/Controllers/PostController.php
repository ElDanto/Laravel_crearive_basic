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

    public function store()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'slug' => 'post_from_phpstorm',
                'content' => 'some content from phpstorm',
                'image' => 'some_image',
                'likes' => 12,
                'is_published' => true,
            ],
            [
                'title' => 'another title of post from phpstorm',
                'slug' => 'another_post_from_phpstorm',
                'content' => 'some content from phpstorm',
                'image' => 'another_some_image',
                'likes' => 12,
                'is_published' => true,
            ],
        ];

//        Post::create([
//            'title' => 'new title of post from phpstorm',
//            'slug' => 'new_post_from_phpstorm',
//            'content' => 'new content from phpstorm',
//            'image' => 'new_image',
//            'likes' => 12,
//            'is_published' => false,
//        ]);

        foreach ($postsArr as $post) {
//           Post::create($post);

        }

        dd('created');
    }

    public function update()
    {
        $post = Post::find(5);
//        dd($post->title);
        $post->update(['title' => 'updated title']);
        dd('updated');
    }

}
