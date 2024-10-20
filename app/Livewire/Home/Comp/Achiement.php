<?php

namespace App\Livewire\Home\Comp;

use App\Models\About;
use Livewire\Component;

class Achiement extends Component
{
    public function render()
    {
        $achivement = About::select('achivement')->first();
        return view('livewire.home.comp.achiement', compact('achivement'));
    }
}
