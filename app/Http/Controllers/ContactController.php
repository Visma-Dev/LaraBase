<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): string
    {
        // выводим блейд-шаблон из resources/views/
        return view('contacts'); // первым аргументом указываем название вьюшки
    }
}

