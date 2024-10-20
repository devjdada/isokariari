<?php

namespace App\Livewire\Service;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

#[Layout('layouts.app')]

class NewService extends Component
{
    use WithFileUploads;
    public $image;
    public $title;
    public $description;
    public $photos = [];
    public $category;



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

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'image|max:1024',
        ]);

        $img =  asset('static/' . $this->image->store('services'));

        $data = [
            'title' => $this->title,
            'image' => $img,
            'description' => $this->description,
            'slug' => Str::slug($this->title),
            'category' => $this->category,
            'post_by' => Auth::user()->id,
        ];

        $service = Service::create($data);


        foreach ($this->photos as $photo) {
            $manager = new ImageManager(new Driver());
            // Save the original image
            $originalPath = $photo->store('services');
            $originalUrl = asset('static/' . $originalPath);

            // Create a thumbnail
            $thumbnailPath = 'services/thumbnail/' . basename($originalPath);
            $thumbnailFullPath = base_path('public/static/' . $thumbnailPath); // Define the full path for the thumbnail
            $thumbnail =  $manager->read($photo);
            $thumbnail = $thumbnail->resize(200, 200);
            $thumbnail->toJpeg(70)->save($thumbnailFullPath);



            $thumbnailUrl = asset('static/' . $thumbnailPath);
            // Store the original image data
            $dataOriginal = [
                'url' => $originalUrl,
                'thumbnail' => $thumbnailUrl,
                'group' => $service->id,
                'type' => 'service',
            ];
            Photo::create($dataOriginal);
        }
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->reset([
            'title',
            'description',
            'image',
            'photos',
            'category',
        ]);
    }



    public function render()
    {
        $categories = Category::get();
        return view('livewire.service.new-service', [
            'categories' => $categories
        ]);
    }
}
