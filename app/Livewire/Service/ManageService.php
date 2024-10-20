<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class ManageService extends Component
{
    use WithPagination;
    public function edit(Service $service)
    {
        $this->redirect(route('edit-service', ['slug' => $service->slug]), navigate: true);
    }
    public function delete(Service $service)
    {
        $service->delete();
        $this->resetPage();
    }
    public function render()
    {
        $services = Service::all();
        return view('livewire.service.manage-service', [
            'services' => $services,
        ]);
    }
}
