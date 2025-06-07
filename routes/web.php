<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CoastalServicesController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/en', function () {
    app()->setLocale('en');
    return view('home');
})->name('home');


Route::get('language/{locale}', [LanguageController::class, 'switchLang'])->name('language.switch');


/* —————  SERVICIOS COSTEROS  ————— */
Route::get('/servicios-costeros', [CoastalServicesController::class, 'index_es'])
      ->name('coastal.services.es');

Route::get('/coastal-services', [CoastalServicesController::class, 'index_en'])
      ->name('coastal.services.en');

/* —————  INTERNA SERVICIOS COSTEROS  ————— */
Route::get('/servicios-costeros/{slug}', [CoastalServicesController::class, 'show_es'])
      ->name('coastal.services.show.es');

Route::get('/coastal-services/{slug}', [CoastalServicesController::class, 'show_en'])
      ->name('coastal.services.show.en');

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

