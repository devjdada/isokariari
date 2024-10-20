<?php

namespace App\Livewire\About\Comp;

use App\Models\Client;
use Livewire\Component;

class ClientsComp extends Component
{
    public function render()
    {
        $clients = Client::all();
        return view('livewire.about.comp.clients-comp', compact('clients'));
    }
}
