<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\SignIn::class)->name('auth.sign-in');
Route::get('/sign-up', \App\Livewire\SignUp::class)->name('auth.sign-up');

Route::middleware('auth')->group(function () {
    Route::get('/sign-out', function () {
        auth()->logout();

        return redirect()->route('auth.sign-in');
    })->name('auth.sign-out');

    Route::get('/home', \App\Livewire\Home::class)->name('home');
});
