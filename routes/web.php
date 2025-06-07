<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('home');
});

Route::get('language/{locale}', [LanguageController::class, 'switchLang'])->name('language.switch');
