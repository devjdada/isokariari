<?php

namespace App\Livewire\Contact;

use App\Models\About;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class ContactPage extends Component
{
    public function render()
    {
        $about = About::first();
        return view('livewire.contact.contact-page', [
            'about' => $about
        ]);
    }
}
