<?php

namespace App\Livewire\Project;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class ProjectDetail extends Component
{
    public function render()
    {
        return view('livewire.project.project-detail');
    }
}
