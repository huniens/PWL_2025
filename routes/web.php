<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\WelcomeController;


Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/articles/{id}', [PageController::class, 'articles'])->name('articles');





