<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceSearch extends Component
{
    public $services;

    public function __construct($services = null)
    {
        // This will be null initially, the view will handle getting the serviceIndex
        $this->services = $services;
    }

    public function render()
    {
        return view('components.service-search', [
            'services' => $this->services
        ]);
    }
} 