<?php

namespace App\Livewire\Home\Comp;

use App\Models\User;
use Livewire\Component;

class Team extends Component
{
    public function render()
    {
        $users = User::where('status', 1)->get();
        return view('livewire.home.comp.team', [
            'users' => $users
        ]);
    }
}
