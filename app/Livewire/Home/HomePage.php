<?php

namespace App\Livewire\Home;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home.home-page');
    }
}
