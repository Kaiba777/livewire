<?php

use App\Livewire\Counter;
use App\Livewire\ShowPost;
use App\Livewire\TodoList;
use App\Livewire\CreatePost;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/counter', Counter::class);
Route::get('/post', CreatePost::class);

Route::get('/post/{id}', ShowPost::class);
Route::get('/todolist', TodoList::class);
