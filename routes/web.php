<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

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
