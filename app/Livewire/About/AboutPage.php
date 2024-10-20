<?php

namespace App\Livewire\About;

use App\Models\About;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class AboutPage extends Component
{
    public function render()
    {
        $about = About::first();
        return view('livewire.about.about-page', [
            'about' => $about,
        ]);
    }
}
