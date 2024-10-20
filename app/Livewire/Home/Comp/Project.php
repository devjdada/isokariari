<?php

namespace App\Livewire\Home\Comp;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public function render()
    {
        $projects = ModelsProject::where('status', true)->get();
        return view('livewire.home.comp.project', [
            'projects' => $projects,
        ]);
    }
}
