<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    protected function slugDictionary(): array
    {
        return Cache::rememberForever('slug_map', function () {
            //  ▸ Off-shore
            $offshore = collect(config('offshore_services'))->mapWithKeys(function ($raw) {
                $en = Str::slug(__('offshore_services.' . $raw['title_key'], locale: 'en'));
                $es = Str::slug(__('offshore_services.' . $raw['title_key'], locale: 'es'));
                return [$en => $es];
            });

            //  ▸ Coastal
            $coastal  = collect(config('coastal_services'))->mapWithKeys(function ($raw) {
                $en = Str::slug(__('coastal_services.' . $raw['title_key'], locale: 'en'));
                $es = Str::slug(__('coastal_services.' . $raw['title_key'], locale: 'es'));
                return [$en => $es];
            });

            //  ▸ Environmental
            $environmental = collect(config('environmental_services'))->mapWithKeys(function ($raw) {
                $en = Str::slug(__('environmental_services.' . $raw['title_key'], locale: 'en'));
                $es = Str::slug(__('environmental_services.' . $raw['title_key'], locale: 'es'));
                return [$en => $es];
            });

            //  ▸ Oceanographic
            $oceanographic = collect(config('oceanographic_studies'))->mapWithKeys(function ($raw) {
                $en = Str::slug(__('oceanographic_studies.' . $raw['title_key'], locale: 'en'));
                $es = Str::slug(__('oceanographic_studies.' . $raw['title_key'], locale: 'es'));
                return [$en => $es];
            });

            return $offshore->merge($coastal)->merge($environmental)->merge($oceanographic)->all();
        });
    }

    /** POST /language-switch */
    public function switch(Request $request)
    {
        // 1) idioma destino
        $to   = $request->input('language', 'en');
        $from = $to === 'en' ? 'es' : 'en';

        Session::put('locale', $to);
        App::setLocale($to);

        // 2) URL actual
        $prev   = parse_url(url()->previous(), PHP_URL_PATH) ?? '/';
        $pieces = collect(explode('/', trim($prev, '/')));

        // 3) diccionarios
        $seg    = config('route_map.segments');
        $slug   = $this->slugDictionary();

        $swapSeg  = $to === 'es' ? $seg         : array_flip($seg);
        $swapSlug = $to === 'es' ? $slug        : array_flip($slug);

        // 4) reemplazos
        $path = $pieces->map(function ($part, $i) use ($swapSeg, $swapSlug) {
            return $i === 0 ? ($swapSeg[$part]  ?? $part)
                            : ($swapSlug[$part] ?? $part);
        })->implode('/');

        return redirect()->to(url($path === '' ? '/' : "/$path"));
    }
}

