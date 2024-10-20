<?php

namespace App\Livewire\Service;

use App\Models\Photo;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class ServiceDetail extends Component
{
    public $slug;
    public function render()
    {
        $service = Service::where('slug', $this->slug)->first();
        $galleries = Photo::where('group', $service->id)
            ->where('type', 'service')
            ->get();
        $services = Service::select('title', 'slug')->where('status', true)->get();
        return view('livewire.service.service-detail', [
            'service' => $service,
            'services' => $services,
            'galleries' => $galleries
        ]);
    }
}
