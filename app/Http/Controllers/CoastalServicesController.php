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
            $prefix = app()->getLocale() === 'en' ? 'coastal-services' : 'servicios-costeros';
    
            return [
                'title'       => $title,
                'description' => $description,
                'image'       => $raw['image'],
                'features'    => $raw['features'],
                'gallery'     => $raw['gallery_images'],
                'slug'        => \Illuminate\Support\Str::slug($title),
                'prefix'      => $prefix,
            ];
        });
    }
}