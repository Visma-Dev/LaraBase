<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): string
    {

        //забираем все посты из таблицы
        $posts = Post::all();
        foreach ( $posts as $post) {
            dump($post->title);
        }

        //фильтруем только по опубликованным
        $posts = Post::where('is_published', 1)->get();
        foreach ( $posts as $post) {
            dump($post->title);
        }

        dd('end');
    }


}

