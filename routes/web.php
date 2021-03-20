<?php

use Illuminate\Support\Facades\Route;





// common
Route::get('/', \App\Http\Livewire\Main\Home::class)->name('home');
Route::get('/contact', \App\Http\Livewire\Main\Contact::class)->name('contact');
Route::get('/dashboard', [\App\Http\Controllers\RouteManageController::class, 'dashboard'])->name('dashboard');

// authentication
Route::get('/login', \App\Http\Livewire\Main\Login::class)->name('login');
Route::get('/register', \App\Http\Livewire\Main\Register::class)->name('register');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Advertiser
Route::get('/advertiser/dashboard', \App\Http\Livewire\Advertiser\Dashboard::class)->name('advertiser.dashboard');
Route::get('/advertiser/campaign', \App\Http\Livewire\Advertiser\Campaign::class)->name('advertiser.campaign.list');
