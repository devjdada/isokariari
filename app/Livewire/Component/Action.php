<?php

namespace App\Livewire\Component;

use App\Models\About;
use Livewire\Component;

class Action extends Component
{
    public function render()
    {
        $about = About::select('email', 'phone')->first();
        return view('livewire.component.action', compact('about'));
    }
}
