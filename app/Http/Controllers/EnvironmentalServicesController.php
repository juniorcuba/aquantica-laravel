<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EnvironmentalServicesController extends Controller
{
    /** Grid */
    public function index()
    {
        app()->setLocale('en');
        $services = $this->collectServices();
        return view('environmental_services', compact('services'));
    }

    public function index_es()
    {
        app()->setLocale('es');
        $services = $this->collectServices();
        return view('environmental_services', compact('services'));
    }

    public function index_en()
    {
        app()->setLocale('en');
        $services = $this->collectServices();
        return view('environmental_services', compact('services'));
    }

    /** Detail */
    public function show(Request $request, string $slug)
    {
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);

        return view('environmental_service_detail', compact('service'));
    }

    public function show_es(Request $request, string $slug)
    {
        app()->setLocale('es');
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        return view('environmental_service_detail', compact('service'));
    }

    public function show_en(Request $request, string $slug)
    {
        app()->setLocale('en');
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        return view('environmental_service_detail', compact('service'));
    }

    /** Helper → returns a Collection of translated services */
    private function collectServices()
    {
        return collect(config('environmental_services'))->map(function ($raw) {
            // 🔑 Always use the file prefix: environmental_services.<key>
            $title       = __('environmental_services.' . $raw['title_key']);
            $description = __('environmental_services.' . $raw['description_key']);
            $description_footer = isset($raw['description_footer_key']) ? __('environmental_services.' . $raw['description_footer_key']) : null;
            $prefix = app()->getLocale() === 'en' ? 'environmental-services' : 'tramites-ambientales';
            
            // Get feature keys from language file and translate them
            $featureKeys = isset($raw['show_features']) && $raw['show_features'] ? __('environmental_services.' . $raw['title_key'] . '_features') : [];
            $features = collect($featureKeys)->map(function ($featureKey) {
                return __('environmental_services.' . $featureKey);
            })->toArray();
            
            // Get feature descriptions
            $feature_descriptions = collect($featureKeys)->map(function ($featureKey) {
                $descKey = $featureKey . '_desc';
                return __('environmental_services.' . $descKey);
            })->toArray();
    
            return [
                'title'       => $title,
                'description' => $description,
                'description_footer' => $description_footer,
                'image'       => asset($raw['image']),
                'hero_image'  => isset($raw['hero_image']) ? asset($raw['hero_image']) : asset($raw['image']),
                'features'    => $features,
                'feature_descriptions' => $feature_descriptions,
                'gallery'     => collect($raw['gallery_images'])->map(fn($img) => asset($img))->toArray(),
                'slug'        => \Illuminate\Support\Str::slug($title),
                'prefix'      => $prefix,
                'show_features' => $raw['show_features'] ?? true,
            ];
        });
    }
} 