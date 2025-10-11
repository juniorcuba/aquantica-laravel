<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CoastalServicesController extends Controller
{
    /** Grid */
    public function index()
    {
        app()->setLocale('en');
        $services = $this->collectServices();
        return view('coastal_services', compact('services'));
    }

    public function index_es()
    {
        app()->setLocale('es');
        $services = $this->collectServices();
        return view('coastal_services', compact('services'));
    }

    public function index_en()
    {
        app()->setLocale('en');
        $services = $this->collectServices();
        return view('coastal_services', compact('services'));
    }

    /** Detail */
    public function show(Request $request, string $slug)
    {
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);

        return view('coastal_service_detail', compact('service'));
    }

    public function show_es(Request $request, string $slug)
    {
        app()->setLocale('es');
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        return view('coastal_service_detail', compact('service'));
    }

    public function show_en(Request $request, string $slug)
    {
        app()->setLocale('en');
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        return view('coastal_service_detail', compact('service'));
    }

    /** Helper → returns a Collection of translated services */
    private function collectServices()
    {
        return collect(config('coastal_services'))->map(function ($raw) {
            // 🔑 Always use the file prefix: coastal_services.<key>
            $title       = __('coastal_services.' . $raw['title_key']);
            $description = __('coastal_services.' . $raw['description_key']);
            $description_footer = isset($raw['description_footer_key']) ? __('coastal_services.' . $raw['description_footer_key']) : null;
            $prefix = app()->getLocale() === 'en' ? 'coastal-services' : 'servicios-costeros';
            
            // Get feature keys from language file and translate them
            $featureKeys = isset($raw['show_features']) && $raw['show_features'] ? __('coastal_services.' . $raw['title_key'] . '_features') : [];
            $features = collect($featureKeys)->map(function ($featureKey) {
                return __('coastal_services.' . $featureKey);
            })->toArray();
            
            // Get feature descriptions
            $feature_descriptions = collect($featureKeys)->map(function ($featureKey) {
                $descKey = $featureKey . '_desc';
                return __('coastal_services.' . $descKey);
            })->toArray();
    
            return [
                'title'       => $title,
                'description' => $description,
                'description_footer' => $description_footer,
                'image'       => $raw['image'],
                'hero_image'  => $raw['hero_image'] ?? $raw['image'],
                'features'    => $features,
                'feature_descriptions' => $feature_descriptions,
                'gallery'     => $raw['gallery_images'],
                'slug'        => \Illuminate\Support\Str::slug($title),
                'prefix'      => $prefix,
                'show_features' => $raw['show_features'] ?? true,
            ];
        });
    }
}