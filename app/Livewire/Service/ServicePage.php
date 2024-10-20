<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class ServicePage extends Component
{
    public function render()
    {
        $services = Service::where('status', true)->get();
        return view('livewire.service.service-page', [
            'services' => $services
        ]);
    }
}
