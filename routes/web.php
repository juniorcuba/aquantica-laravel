<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CoastalServicesController;
use App\Http\Controllers\OffshoreServicesController;
use App\Http\Controllers\LegalController;

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

/* —————  SERVICIOS OFFSHORE  ————— */
Route::get('/servicios-costa-afuera', [OffshoreServicesController::class, 'index_es'])
      ->name('offshore.services.es');

Route::get('/offshore-services', [OffshoreServicesController::class, 'index_en'])
      ->name('offshore.services.en');

/* —————  INTERNA SERVICIOS OFFSHORE  ————— */
Route::get('/servicios-costa-afuera/{slug}', [OffshoreServicesController::class, 'show_es'])
      ->name('offshore.services.show.es');

Route::get('/offshore-services/{slug}', [OffshoreServicesController::class, 'show_en'])
      ->name('offshore.services.show.en');

Route::get('/search', function () {
    $query = request('q');
    // lógica de búsqueda aquí...
    return view('search-results', compact('query'));
})->name('search');

Route::post('/language-switch', [LanguageController::class, 'switch'])
      ->name('language.switch');

Route::fallback(function () {
    abort(404);
});

/* ── Terms & Conditions ───────────────────────────────────────── */
Route::get('/terms-and-conditions',         [LegalController::class, 'terms_en'])
      ->name('legal.terms.en');
Route::get('/terminos-y-condiciones',       [LegalController::class, 'terms_es'])
      ->name('legal.terms.es');

/* ── Privacy Policy ───────────────────────────────────────────── */
Route::get('/privacy-policy',               [LegalController::class, 'privacy_en'])
      ->name('legal.privacy.en');
Route::get('/politica-de-privacidad',       [LegalController::class, 'privacy_es'])
      ->name('legal.privacy.es');


Route::get('/gracias', function () {
      App::setLocale('es');
      return view('thankyou');
      })->name('thankyou_es');

Route::get('/thank-you', function () {
      App::setLocale('en');
      return view('thankyou');
      })->name('thankyou_en');