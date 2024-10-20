<?php

namespace App\Livewire\Home\Comp;

use App\Models\Service as ModelsService;
use Livewire\Component;

class Service extends Component
{
    public function render()
    {
        $services = ModelsService::whereStatus(1)->get();
        return view('livewire.home.comp.service', [
            'services' => $services
        ]);
    }
}
