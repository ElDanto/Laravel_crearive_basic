<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'store']);
Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/my_page', [MyPlaceController::class, 'index']);

Route::get('/about', function () {
    return 'Hi my name is Daniil';
});

Route::get('/contact', function (){
    return 'this is my contact page';
});

Route::get('/city', function() {
    return 'this is my city page';
});

