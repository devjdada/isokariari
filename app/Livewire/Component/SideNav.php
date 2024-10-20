<?php

namespace App\Livewire\Component;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class SideNav extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.component.side-nav');
    }
}
