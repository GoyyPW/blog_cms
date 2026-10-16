<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/artikel', [PageController::class, 'posts'])->name('posts');
Route::get('/artikel/{id}', function ($id) {
    return "Detail artikel nomor " . $id;
})->whereNumber('id');
Route::get('/kontak', [PageController::class, 'contacts'])->name('contacts');


