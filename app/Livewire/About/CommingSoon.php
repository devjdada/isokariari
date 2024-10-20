<?php

namespace App\Livewire\About;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.web')]
class CommingSoon extends Component
{
    public function render()
    {
        return view('livewire.about.comming-soon');
    }
}
