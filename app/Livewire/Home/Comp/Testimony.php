<?php

namespace App\Livewire\Home\Comp;

use App\Models\Testimony as ModelsTestimony;
use Livewire\Component;

class Testimony extends Component
{
    public function render()
    {
        $testimonies = ModelsTestimony::all();
        return view('livewire.home.comp.testimony', [
            'testimonies' => $testimonies
        ]);
    }
}
