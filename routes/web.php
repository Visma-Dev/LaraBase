<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MyController;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\MainController;
use  App\Http\Controllers\AboutController;
use  App\Http\Controllers\ContactController;

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

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/restore', [PostController::class, 'restore']);
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);

Route::get('/main', [MainController::class, 'index'])->name('main.index');// метод name, позволяет задавать имя роутам
Route::get('/about', [AboutController::class, 'index'])->name('about.index');// это полезно при указании путей в шаблонах
Route::get('/contacts', [PostController::class, 'index'])->name('contact.index');
