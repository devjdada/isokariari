<?php

namespace App\Livewire\Component;

use App\Models\Slider;
use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        $slider = Slider::where('isActive', 1)->get();
        return view('livewire.component.banner', [
            'sliders' => $slider,
        ]);
    }
}
