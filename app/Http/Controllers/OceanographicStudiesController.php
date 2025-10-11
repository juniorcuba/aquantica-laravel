<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class OceanographicStudiesController extends Controller
{
    /** Grid */
    public function index()
    {
        app()->setLocale('en');
        $services = $this->collectServices();
        return view('oceanographic_studies', compact('services'));
    }

    public function index_es()
    {
        app()->setLocale('es');
        $services = $this->collectServices();
        return view('oceanographic_studies', compact('services'));
    }

    public function index_en()
    {
        app()->setLocale('en');
        $services = $this->collectServices();
        return view('oceanographic_studies', compact('services'));
    }

    /** Detail */
    public function show(Request $request, string $slug)
    {
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);

        return view('oceanographic_service_detail', compact('service'));
    }

    public function show_es(Request $request, string $slug)
    {
        app()->setLocale('es');
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        return view('oceanographic_service_detail', compact('service'));
    }

    public function show_en(Request $request, string $slug)
    {
        app()->setLocale('en');
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        return view('oceanographic_service_detail', compact('service'));
    }

    /** Helper → returns a Collection of translated services */
    private function collectServices()
    {
        return collect(config('oceanographic_studies'))->map(function ($raw) {
            // 🔑 Always use the file prefix: oceanographic_studies.<key>
            $title       = __('oceanographic_studies.' . $raw['title_key']);
            $description = __('oceanographic_studies.' . $raw['description_key']);
            $description_footer = isset($raw['description_footer_key']) ? __('oceanographic_studies.' . $raw['description_footer_key']) : null;
            $prefix = app()->getLocale() === 'en' ? 'oceanographic-studies' : 'estudios-oceanograficos';
            
            // Get feature keys from language file and translate them
            $featureKeys = isset($raw['show_features']) && $raw['show_features'] ? __('oceanographic_studies.' . $raw['title_key'] . '_features') : [];
            $features = collect($featureKeys)->map(function ($featureKey) {
                return __('oceanographic_studies.' . $featureKey);
            })->toArray();
            
            // Get feature descriptions
            $feature_descriptions = collect($featureKeys)->map(function ($featureKey) {
                $descKey = $featureKey . '_desc';
                return __('oceanographic_studies.' . $descKey);
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