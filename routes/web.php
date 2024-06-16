<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;

Route::get('/', function () {
    return view('welcome');
});

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

