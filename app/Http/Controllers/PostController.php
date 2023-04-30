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

    public function create()
    {
        $postsArr = [
            [
                'title' => '4th post',
                'content' => 'some content',
                'image' => 'beautiful image',
                'likes' => '33',
                'is_published' => '1',

            ],

            [
                'title' => '5th post',
                'content' => 'some content',
                'image' => 'beautiful image',
                'likes' => '33',
                'is_published' => '1',

            ],
        ];

        foreach ($postsArr as $item){

            //метод создания записи в бд, принимающий массив, с необходимыми ключами и значениями
            Post::create($item);
        }

        dd('created');

    }

    public function update()
    {
        // выбираем необходимый пост, с помощью запроса
        $post = Post::find(5);

        // и апдейтим, обращаясь именно к экземпляру класса, т.к. здесь уже идет работа не со статикой
        $post->update([
            'title' => 'updated post',
            'content' => 'some content',
            'image' => 'beautiful image',
            'likes' => '88',
            'is_published' => '1',
        ]);

        dd('updated');
    }


    public function delete()
    {
        $post = Post::find(1);
        $post->delete();

        dd('deleted');
    }


}

