<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class ManageProject extends Component
{
    use WithPagination;
    public function edit(Project $project)
    {
        $this->redirect(route('edit-project', ['slug' => $project->slug]), navigate: true);
    }
    public function delete(Project $project)
    {
        $project->delete();
        $this->resetPage();
    }
    public function render()
    {
        $projects = Project::all();
        return view('livewire.project.manage-project', [
            'projects' => $projects,
        ]);
    }
}
