<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Главная страница доступна всем пользователям
Route::get('/', function () {
    return view('welcome');
});

// Группа маршрутов, которые требуют аутентификации
Route::middleware('auth')->group(function () {
    // Дашборд с дополнительной проверкой на подтверждение почты
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    // Маршруты контролируемые PageController
    Route::get('/home', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
    Route::get('/profile/{name}', [PageController::class, 'showProfile'])->name('profile.show');
    Route::resource('page', PageContentController::class);
    
    // Профиль пользователя
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
});

// Подключение дополнительных маршрутов для аутентификации
require __DIR__.'/auth.php';
