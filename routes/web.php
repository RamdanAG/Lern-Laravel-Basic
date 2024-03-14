<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () { //ini adalah route home
    return view('home',[
        "title" => "Home"
    ]); //memanggil halaman welcome
});

Route::get('/about', function () { //ini adalah route home
    return view('about', [
        "nama" => "wanda puspa meycilla",
        "email" => "meycilla@gmail.com",
        "image" => "photo.JPG",
        "title" => "About"
    ]); //memanggil halaman welcome
});



Route::get('/blog',[PostController::Class, 'index']);
Route::get('posts/{slug}',[PostController::Class, 'show']);



