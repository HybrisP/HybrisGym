<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/class', [PageController::class, 'class'])->name('class');
Route::get('/class/{ref}', [PageController::class, 'detail'])->name('detail');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/send', [PageController::class, 'send'])->name('send');