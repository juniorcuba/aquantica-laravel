<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CoastalServicesController;

Route::get('/', function () {
    return view('home');
});

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