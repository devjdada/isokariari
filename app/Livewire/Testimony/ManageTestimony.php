<?php

namespace App\Livewire\Testimony;

use App\Models\Testimony;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class ManageTestimony extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $addTestyModal = false;
    public $avatar;
    public $name;
    public $doc;
    public $title;
    public $testimonyId;
    public Testimony $testimony;

    public function saveTestimony()
    {
        $this->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'doc' => 'required',
            'title' => 'required',
        ]);
        $avatar =   asset('static/' . $this->avatar->store('testimony'));
        Testimony::create([
            'avatar' => $avatar,
            'name' => $this->name,
            'doc' => $this->doc,
            'title' => $this->title,
        ]);
        $this->reset([
            'avatar',
            'name',
            'doc',
            'title'
        ]);
        $this->resetPage();

        $this->addTestyModal = false;
    }

    public function render()
    {
        $testimonies = Testimony::all();
        return view('livewire.testimony.manage-testimony', [
            'testimonies' => $testimonies,
        ]);
    }
}
