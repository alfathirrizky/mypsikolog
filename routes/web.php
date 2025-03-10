<?php
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/event', function () {
    return view('event', ['title' => 'event', 'posts' => Post::all()]);
});
Route::get('/event/{id}', function ($id) {
    $post = Post::find($id);
    return view('eventDetail', ['post' => $post]);
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/eventDetail', function () {
    return view('eventDetail');
});
