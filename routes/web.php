<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('home');

Route::get('/about-us', function () { return Inertia::render('About');})->name('about');
Route::get('/contact-us', function () { return Inertia::render('Contacts');})->name('contacts');
Route::get('/news-and-blogs', function () { return Inertia::render('Blogs');})->name('blogs');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
