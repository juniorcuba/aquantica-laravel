<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NonDestructiveTestingController extends Controller
{
    /** Grid */
    public function index()
    {
        app()->setLocale('en');
        $services = $this->collectServices();
        return view('non_destructive_testing', compact('services'));
    }

    public function index_es()
    {
        app()->setLocale('es');
        $services = $this->collectServices();
        return view('non_destructive_testing', compact('services'));
    }

    public function index_en()
    {
        app()->setLocale('en');
        $services = $this->collectServices();
        return view('non_destructive_testing', compact('services'));
    }

    /** Detail */
    public function show(Request $request, string $slug)
    {
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        
        $prefix = app()->getLocale() === 'en' ? 'non-destructive-testing' : 'pruebas-no-destructivas';
        return view('non_destructive_testing_detail', compact('service', 'prefix'));
    }

    public function show_es(Request $request, string $slug)
    {
        app()->setLocale('es');
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        
        $prefix = 'pruebas-no-destructivas';
        return view('non_destructive_testing_detail', compact('service', 'prefix'));
    }

    public function show_en(Request $request, string $slug)
    {
        app()->setLocale('en');
        $service = $this->collectServices()
                        ->firstWhere('slug', $slug);

        abort_if(!$service, 404);
        
        $prefix = 'non-destructive-testing';
        return view('non_destructive_testing_detail', compact('service', 'prefix'));
    }

    /** Helper → returns a Collection of translated services */
    private function collectServices()
    {
        return collect(config('non_destructive_testing'))->map(function ($raw) {
            // 🔑 Always use the file prefix: non_destructive_testing.<key>
            $title       = __('non_destructive_testing.' . $raw['title_key']);
            $description = __('non_destructive_testing.' . $raw['description_key']);
            $description_footer = isset($raw['description_footer_key']) ? __('non_destructive_testing.' . $raw['description_footer_key']) : null;
            $prefix = app()->getLocale() === 'en' ? 'non-destructive-testing' : 'pruebas-no-destructivas';
            
            // Get feature keys from language file and translate them
            $featureKeys = isset($raw['show_features']) && $raw['show_features'] ? __('non_destructive_testing.' . $raw['title_key'] . '_features') : [];
            $features = collect($featureKeys)->map(function ($featureKey) {
                return __('non_destructive_testing.' . $featureKey);
            })->toArray();
            
            // Get feature descriptions
            $feature_descriptions = collect($featureKeys)->map(function ($featureKey) {
                $descKey = $featureKey . '_desc';
                return __('non_destructive_testing.' . $descKey);
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