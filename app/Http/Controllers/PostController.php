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

        //фильтруем только по опубликованным
        $posts = Post::where('is_published', 1)->get();

        // выводим блейд-шаблон из resources/views/
        return view('posts', compact('posts')); // первым аргументом указываем название вьюшки,
        // вторым - данные, которые хотим передать в шаблон (в данном случае, используется функция compact для
        // передачи переменной $posts, но также это может быть и например, какой-нибудь элемент массива).
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

    public function restore()
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();

        dd('restored');
    }

    public function firstOrCreate()
    {
        $post = Post::firstOrCreate(

            //первым аргументом, мы указываем массив со значениями, по которым будет проводиться проверка на наличие данных в бд
            [
                'title' => 'already created post',
            ],

            //в качестве 2-го - массив с данными для инсерта в бд. Если элемент найден, то сработает метод first(),
            // в обратном случае воспроизведется create, и запись будет добавлена в штатном режиме.
            [
                'title' => 'post from combine method',
                'content' => 'some content',
                'image' => 'beautiful image',
                'likes' => '42424',
                'is_published' => '1',
            ]
        );
    }

    //По аналогии работает и метод updateOrCreate

    public function updateOrCreate()
    {
        //Если элемент найден, то сработает метод update(),
        // в обратном случае воспроизведется create, и запись будет добавлена в штатном режиме.
        $post = Post::updateOrCreate(
            [
                'title' => 'post from combine method',
            ],

            [
                'title' => 'post from combine method',
                'content' => 'some content',
                'image' => 'beautiful image',
                'likes' => '42424',
                'is_published' => '1',
            ]
        );
    }
}

