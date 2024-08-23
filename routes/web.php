<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::post('/contact', [ContactController::class, 'sendContactEmail'])->name('contact.send');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
