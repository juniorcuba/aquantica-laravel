<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CoastalServicesController;
use App\Http\Controllers\OffshoreServicesController;
use App\Http\Controllers\EnvironmentalServicesController;
use App\Http\Controllers\OceanographicStudiesController;
use App\Http\Controllers\NonDestructiveTestingController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ContactController;

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

/* —————  SERVICIOS COSTA AFUERA  ————— */
Route::get('/servicios-costa-afuera', [OffshoreServicesController::class, 'index_es'])
      ->name('offshore.services.es');

Route::get('/offshore-services', [OffshoreServicesController::class, 'index_en'])
      ->name('offshore.services.en');

/* —————  INTERNA SERVICIOS COSTA AFUERA  ————— */
Route::get('/servicios-costa-afuera/{slug}', [OffshoreServicesController::class, 'show_es'])
      ->name('offshore.services.show.es');

Route::get('/offshore-services/{slug}', [OffshoreServicesController::class, 'show_en'])
      ->name('offshore.services.show.en');

/* —————  TRAMITES AMBIENTALES  ————— */
Route::get('/tramites-ambientales', [EnvironmentalServicesController::class, 'index_es'])
      ->name('environmental.services.es');

Route::get('/environmental-services', [EnvironmentalServicesController::class, 'index_en'])
      ->name('environmental.services.en');

/* —————  INTERNA TRAMITES AMBIENTALES  ————— */
Route::get('/tramites-ambientales/{slug}', [EnvironmentalServicesController::class, 'show_es'])
      ->name('environmental.services.show.es');

Route::get('/environmental-services/{slug}', [EnvironmentalServicesController::class, 'show_en'])
      ->name('environmental.services.show.en');

/* —————  ESTUDIOS OCEANOGRAFICOS  ————— */
Route::get('/estudios-oceanograficos', [OceanographicStudiesController::class, 'index_es'])
      ->name('oceanographic.studies.es');

Route::get('/oceanographic-studies', [OceanographicStudiesController::class, 'index_en'])
      ->name('oceanographic.studies.en');


/* —————  INTERNA ESTUDIOS OCEANOGRAFICOS  ————— */
Route::get('/estudios-oceanograficos/{slug}', [OceanographicStudiesController::class, 'show_es'])
      ->name('oceanographic.studies.show.es');

Route::get('/oceanographic-studies/{slug}', [OceanographicStudiesController::class, 'show_en'])
      ->name('oceanographic.studies.show.en');

/* —————  PRUEBAS NO DESTRUCTIVAS  ————— */
Route::get('/pruebas-no-destructivas', [NonDestructiveTestingController::class, 'index_es'])
      ->name('non_destructive_testing.index.es');

Route::get('/non-destructive-testing', [NonDestructiveTestingController::class, 'index_en'])
      ->name('non_destructive_testing.index.en');

/* —————  INTERNA PRUEBAS NO DESTRUCTIVAS  ————— */
Route::get('/pruebas-no-destructivas/{slug}', [NonDestructiveTestingController::class, 'show_es'])
      ->name('non_destructive_testing.show.es');

Route::get('/non-destructive-testing/{slug}', [NonDestructiveTestingController::class, 'show_en'])
      ->name('non_destructive_testing.show.en');

Route::get('/search', function () {
$query = trim(request('q', ''));
return view('search-results', compact('query'));
})->name('search');

Route::post('/language-switch', [LanguageController::class, 'switch'])
      ->name('language.switch');

Route::post('/contact-send', [ContactController::class, 'store'])->name('contact.store');

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