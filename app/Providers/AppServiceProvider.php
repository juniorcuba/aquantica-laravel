<?php

namespace App\Providers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        App::setLocale(Session::get('locale', config('app.locale')));

                View::composer('*', function ($view) {
            $locale = app()->getLocale();
            $services = Cache::rememberForever('service_index_' . $locale, function () use ($locale) {
                // pull all configs and tag them with their segment info
                $coastal  = collect(config('coastal_services'))
                            ->map(fn ($s) => $s + [
                                'segment_en' => 'coastal-services',
                                'segment_es' => 'servicios-costeros',
                                'config_key' => 'coastal_services'
                            ]);
                $offshore = collect(config('offshore_services'))
                            ->map(fn ($s) => $s + [
                                'segment_en' => 'offshore-services', 
                                'segment_es' => 'servicios-costa-afuera',
                                'config_key' => 'offshore_services'
                            ]);
                $environmental = collect(config('environmental_services'))
                            ->map(fn ($s) => $s + [
                                'segment_en' => 'environmental-services',
                                'segment_es' => 'tramites-ambientales',
                                'config_key' => 'environmental_services'
                            ]);
                $oceanographic = collect(config('oceanographic_studies'))
                            ->map(fn ($s) => $s + [
                                'segment_en' => 'oceanographic-studies',
                                'segment_es' => 'estudios-oceanograficos',
                                'config_key' => 'oceanographic_studies'
                            ]);
    
                return $coastal->merge($offshore)->merge($environmental)->merge($oceanographic)->map(function ($s) {
                    // build labels in BOTH languages using correct translation keys
                    $labelEn = __($s['config_key'] . '.' . $s['title_key'], [], 'en');
                    $labelEs = __($s['config_key'] . '.' . $s['title_key'], [], 'es');
    
                    // Create URLs for both languages
                    $urlEn = url($s['segment_en'] . '/' . Str::slug($labelEn));
                    $urlEs = url($s['segment_es'] . '/' . Str::slug($labelEs));
    
                    return [
                        'en'  => $labelEn,
                        'es'  => $labelEs,
                        'url' => app()->getLocale() === 'en' ? $urlEn : $urlEs,
                    ];
                })->values();
            });

            $view->with('serviceIndex', $services);
        });

        Blade::component(
            'service-search',                   // <x-service-search/>
            \App\View\Components\ServiceSearch::class
        );
    }
}
