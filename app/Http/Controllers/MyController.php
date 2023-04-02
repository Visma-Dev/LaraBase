<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showName(): string
    {
        return "Vladick";
    }

    public function show2Name(): string
    {
        return "Isma";
    }

    public function showGender(): string
    {
        return "male";
    }
}
