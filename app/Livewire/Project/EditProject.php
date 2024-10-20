<?php

namespace App\Livewire\Project;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]

class EditProject extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $doc;
    public $image;
    public $imageNew;
    public $link;
    public $slug;
    public $status;
    public $type;
    public $category;
    public $client;
    public $client_link;
    public $client_logo;
    public $client_logoNew;
    public $post_by;
    public $edit_by;
    public Project $project;

    public $addCategory;
    public bool $addCatModal = false;
    public function addCat()
    {
        $data = [
            'name' => $this->addCategory,
            'slug' => Str::slug($this->addCategory),
        ];
        Category::create($data);
        $this->addCatModal = false;
    }



    public function mount()
    {
        $project = Project::where('slug', $this->slug)->first();
        $this->project = $project;
        $this->title = $project->title;
        $this->description = $project->description;
        $this->doc = $project->doc;
        $this->image = $project->image;
        $this->link = $project->link;
        $this->slug = $project->slug;
        $this->status = $project->status;
        $this->type = $project->type;
        $this->category = $project->category;
        $this->client = $project->client;
        $this->client_link = $project->client_link;
        $this->client_logo = $project->client_logo;
        $this->post_by = $project->post_by;
        $this->edit_by = $project->edit_by;
    }

    public function update()
    {

        $this->validate([
            'title' => 'required',
            'doc' => 'required',
            'description' => 'required',
            'category' => 'required',

        ]);

        $imageNew = $this->image;
        $newClientLogos = $this->client_logo;

        if (isset($this->client_logoNew)) {
            $newClientLogos = asset('static/' . $this->client_logoNew->store('clientLogo'));
        };

        if (isset($this->imageNew)) {
            $imageNew = asset('static/' . $this->imageNew->store('projects'));
        }

        $this->project->title = $this->title;
        $this->project->description = $this->description;
        $this->project->doc = $this->doc;
        $this->project->image = $imageNew;
        $this->project->link = $this->link;
        $this->project->slug = Str::slug($this->title);
        $this->project->category = $this->category;
        $this->project->client = $this->client;
        $this->project->client_link = $this->client_link;
        $this->project->client_logo = $newClientLogos;
        $this->project->edit_by = Auth::user()->id;

        $this->project->save();
        $this->redirect(route('manage-projects'), navigate: true);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.project.edit-project', [
            'categories' => $categories,
        ]);
    }
}
