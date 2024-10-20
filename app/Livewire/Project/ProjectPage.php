<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class ProjectPage extends Component
{
    public function render()
    {
        $projects = Project::where('status', true)->get();
        return view('livewire.project.project-page', [
            'projects' => $projects
        ]);
    }
}
