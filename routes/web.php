<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\SignIn::class)->name('auth.sign-in');
Route::get('/sign-up', \App\Livewire\SignUp::class)->name('auth.sign-up');

// Route::get('/posts/create', \App\Livewire\Posts\Create::class)->name('posts.create');

Route::get('clear-posts', function () {
    \App\Models\Post::truncate();

    return redirect()->route('home');
})->name('clear-posts');

Route::middleware('auth')->group(function () {
    Route::get('/sign-out', function () {
        auth()->logout();

        return redirect()->route('auth.sign-in');
    })->name('auth.sign-out');

    Route::get('/home', \App\Livewire\Home::class)->name('home');
});
