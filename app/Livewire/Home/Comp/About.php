<?php

namespace App\Livewire\Home\Comp;

use App\Models\About as ModelsAbout;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $about = ModelsAbout::first();
        return view('livewire.home.comp.about', [
            'about' => $about,
        ]);
    }
}
