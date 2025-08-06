<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NonDestructiveTestingController extends Controller
{
    /**
     * Show the Non-Destructive Testing service page (Spanish)
     */
    public function show_es()
    {
        App::setLocale('es');
        return $this->showService();
    }

    /**
     * Show the Non-Destructive Testing service page (English)
     */
    public function show_en()
    {
        App::setLocale('en');
        return $this->showService();
    }

    /**
     * Common method to show the service details
     */
    private function showService()
    {
        $service = $this->getServiceData();
        return view('non_destructive_testing_detail', compact('service'));
    }

    /**
     * Collect and transform service data
     */
    private function getServiceData()
    {
        $raw = config('non_destructive_testing')[0]; // Get the single service
        
        // Build service data following the same pattern as other services
        $title = __('non_destructive_testing.' . $raw['title_key']);
        $description = __('non_destructive_testing.' . $raw['description_key']);
        $description_footer = isset($raw['description_footer_key']) ? 
            __('non_destructive_testing.' . $raw['description_footer_key']) : null;
        
        // Get feature keys from language file and translate them
        $featureKeys = isset($raw['show_features']) && $raw['show_features'] ? 
            __('non_destructive_testing.' . $raw['title_key'] . '_features') : [];
        
        $features = collect($featureKeys)->map(function ($featureKey) {
            return __('non_destructive_testing.' . $featureKey);
        })->toArray();
        
        // Get feature descriptions
        $feature_descriptions = collect($featureKeys)->map(function ($featureKey) {
            $descKey = $featureKey . '_desc';
            return __('non_destructive_testing.' . $descKey);
        })->toArray();

        return [
            'title'                 => $title,
            'description'           => $description,
            'description_footer'    => $description_footer,
            'image'                 => $raw['image'],
            'features'              => $features,
            'feature_descriptions'  => $feature_descriptions,
            'gallery'               => $raw['gallery_images'],
            'slug'                  => \Illuminate\Support\Str::slug($title),
            'show_features'         => $raw['show_features'] ?? true,
        ];
    }
}