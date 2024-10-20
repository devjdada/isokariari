<?php

namespace App\Livewire\Service;

use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class EditService extends Component
{
    use WithFileUploads;
    public $image;
    public $newImage;
    public $title;
    public $description;
    public $photos = [];
    public $category;
    public $slug;

    public Service $service;

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
        $service = Service::where('slug', $this->slug)->first();
        $this->service = $service;
        $this->title = $service->title;
        $this->description = $service->description;
        $this->category = $service->category;
        $this->image = $service->image;
    }
    public function update()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);
        $img = $this->image;
        if (isset($this->newImage)) {
            $img = asset('static/' . $this->newImage->store('services'));
        }

        $data = [
            'title' => $this->title,
            'image' => $img,
            'description' => $this->description,
            'slug' => Str::slug($this->title),
            'category' => $this->category,
        ];

        $this->service->update($data);
        foreach ($this->photos as $photo) {
            $url =   asset('static/' .  $photo->store(path: 'services'));
            $data = [
                'url' => $url,
                'group' => $this->service->id,
                'type' => 'service',
            ];
            Photo::create($data);
        }
        $this->redirect(route('manage-services'), navigate: true);
    }
    public function render()
    {
        $categories = Category::all();
        $galleries = Photo::pluck('url')->toArray();
        return view('livewire.service.edit-service', [
            'categories' => $categories,
            'galleries' => $galleries
        ]);
    }
}
