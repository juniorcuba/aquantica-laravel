<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class OffshoreServicesController extends Controller
{
    /* ────── LIST PAGES ────── */

    /** English grid  ( /offshore-services ) */
    public function index_en()
    {
        app()->setLocale('en');

        $services = $this->collectServices();
        $featured = $services->firstWhere('featured', true);
        $other    = $services->reject(fn ($s) => $s['featured'] ?? false);

        return view('offshore_services', compact('featured', 'other', 'services'));
    }

    /** Spanish grid  ( /servicios-costa-afuera ) */
    public function index_es()
    {
        app()->setLocale('es');

        $services = $this->collectServices();
        $featured = $services->firstWhere('featured', true);
        $other    = $services->reject(fn ($s) => $s['featured'] ?? false);

        return view('offshore_services', compact('featured', 'other', 'services'));
    }

    /* ────── DETAIL PAGES ────── */

    /** English detail ( /offshore-services/{slug} ) */
    public function show_en(Request $request, string $slug)
    {
        app()->setLocale('en');
        $service = $this->collectServices()->firstWhere('slug', $slug);
        abort_if(!$service, 404);
    
        // if it's the featured card, load the special blade
        $view = $service['featured'] ? 'offshore_service_detail_rov' : 'offshore_service_detail';
        return view($view, compact('service'));
    }
    
    public function show_es(Request $request, string $slug)
    {
        app()->setLocale('es');
        $service = $this->collectServices()->firstWhere('slug', $slug);
        abort_if(!$service, 404);
    
        $view = $service['featured'] ? 'offshore_service_detail_rov' : 'offshore_service_detail';
        return view($view, compact('service'));
    }

    /* ────── Helper: build translated collection ────── */
    private function collectServices(): Collection
    {
        return collect(config('offshore_services'))->map(function ($raw) {
            $title             = __('offshore_services.' . $raw['title_key']);
            $description       = __('offshore_services.' . $raw['description_key']);
            $description_footer = isset($raw['description_footer_key']) 
                                ? __('offshore_services.' . $raw['description_footer_key']) 
                                : null;
            $prefix = app()->getLocale() === 'en' ? 'offshore-services' : 'servicios-costa-afuera';

            return [
                'title'              => $title,
                'description'        => $description,
                'description_footer' => $description_footer,
                'image'              => $raw['image'],
                'prefix'             => $prefix,
                'features'           => $raw['features'],
                'gallery'            => $raw['gallery_images'],
                'stats'              => collect($raw['stats'] ?? [])
                                          ->map(fn ($s) => [
                                              'value' => $s['value'],
                                              'label' => __('offshore_services.' . $s['label_key']),
                                          ]),
                'featured'           => $raw['featured'] ?? false,
                'show_features'      => $raw['show_features'] ?? false,
                'slug'               => \Illuminate\Support\Str::slug($title),   // locale-aware slug
            ];
        });
    }
}

