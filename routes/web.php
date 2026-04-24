<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/gallery/{id}', [MainController::class, 'gallery'])->name('gallery');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    $contacts = [
        'address' => 'г. Москва, ул. Примерная, д. 10',
        'email' => 'student@example.com',
        'phone' => '+7 (900) 123-45-67',
    ];

    return view('contacts', ['contacts' => $contacts]);
})->name('contacts');
