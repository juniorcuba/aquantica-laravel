<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/en', function () {
    app()->setLocale('en');
    return view('home');
})->name('home');


Route::get('language/{locale}', [LanguageController::class, 'switchLang'])->name('language.switch');

Route::get('/search', function () {
    $query = request('q');
    // lógica de búsqueda aquí...
    return view('search-results', compact('query'));
})->name('search');

Route::post('/language-switch', function () {
    $lang = request('language');
    session(['locale' => $lang]);
    app()->setLocale($lang);
    return back();
})->name('language.switch');