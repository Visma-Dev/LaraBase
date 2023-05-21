<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(): string
    {
        // выводим блейд-шаблон из resources/views/
        return view('main'); // первым аргументом указываем название вьюшки
    }
}

