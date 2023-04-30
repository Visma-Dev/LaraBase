<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MyController;
use  App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Creating routes via closures
Route::get('/', function () {
    return view('welcome');
});

//Creating routes via controllers
Route::get('info/name',  [MyController::class, 'showName']);
Route::get('info/2name',  [MyController::class, 'show2Name']);
Route::get('info/gender',  [MyController::class, 'showGender']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
