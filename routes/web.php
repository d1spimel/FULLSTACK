<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PageContentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/portfolio', [PageController::class, 'portfolio']);
Route::get('/profile/{name}', [PageController::class, 'showProfile']);
Route::get('/redirect', RedirectController::class);

Route::resource('page', PageContentController::class);
