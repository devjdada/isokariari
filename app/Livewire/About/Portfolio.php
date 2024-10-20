<?php

namespace App\Livewire\About;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class Portfolio extends Component
{
    public function render()
    {
        return view('livewire.about.portfolio');
    }
}
