<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CoastalServicesController;

Route::get('/', function () {
    App::setLocale(session('locale', config('app.locale'))); // <-- forzado aquí también
    return view('home');
})->name('home');

Route::get('/contacto', function () {
      App::setLocale('es');
      return view('contact');
  })->name('contact_es');

  Route::get('/contact', function () {
      App::setLocale('en');
      return view('contact');
  })->name('contact_en');

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
    return redirect()->route('home'); // redirige siempre a home
})->name('language.switch');
