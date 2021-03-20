<?php

use Illuminate\Support\Facades\Route;


Route::get('/', \App\Http\Livewire\Main\Home::class)->name('home');
Route::get('/login', \App\Http\Livewire\Main\Login::class)->name('login');
Route::get('/register', \App\Http\Livewire\Main\Register::class)->name('register');

Route::get('/contact', \App\Http\Livewire\Main\Contact::class)->name('contact');

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
