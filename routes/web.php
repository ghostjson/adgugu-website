<?php

use Illuminate\Support\Facades\Route;


Route::get('/', \App\Http\Livewire\Main\Home::class);
Route::get('/login', \App\Http\Livewire\Main\Login::class);
Route::get('/register', \App\Http\Livewire\Main\Register::class);

Route::get('/contact', \App\Http\Livewire\Main\Contact::class);
