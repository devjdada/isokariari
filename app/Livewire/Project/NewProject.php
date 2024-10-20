<?php

namespace App\Livewire\Project;

use App\Models\Category;
use App\Models\Client;
use App\Models\Photo;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

#[Layout('layouts.app')]

class NewProject extends Component
{
    use WithFileUploads;
    public $image;
    public $title;
    public $description;
    public $doc;
    public $clientId;
    public $link;
    public $photos = [];
    public $category;

    public $addCategory;

    public bool $addCatModal = false;

    public $addClientModal = false;
    public $clientLink;
    public $clientLogo;
    public $clientName;


    public function saveClient()
    {

        $this->validate([
            'clientLogo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'clientName' => 'required',
        ]);

        $avatar =   asset('static/' . $this->clientLogo->store('client'));
        Client::create([
            'client' => $this->clientName,
            'client_link' => $this->clientLink,
            'client_logo' => $avatar,
        ]);
        $this->reset([
            'clientName',
            'clientLink',
            'clientLogo',
        ]);
        // $this->resetPage();

        $this->addClientModal = false;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'doc' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'image|max:1024',
        ]);
        $img =  asset('static/' . $this->image->store('projects'));
        if (isset($this->clientLogo)) {
            $clientLogo =   asset('static/' . $this->clientLogo->store('clientLogo'));
        }
        $data = [
            'title' => $this->title,
            'image' => $img,
            'description' => $this->description,
            'doc' => $this->doc,
            'link' => $this->link,
            'client_id' => $this->clientId,
            'slug' => Str::slug($this->title),
            'category' => $this->category,
            'post_by' => Auth::user()->id,
        ];
        $project =  Project::create($data);
        foreach ($this->photos as $photo) {
            $manager = new ImageManager(new Driver());
            // Save the original image
            $originalPath = $photo->store('projects');
            $originalUrl = asset('static/' . $originalPath);

            // Create a thumbnail
            $thumbnailPath = 'projects/thumbnail/' . basename($originalPath);
            $thumbnailFullPath = base_path('public/static/' . $thumbnailPath); // Define the full path for the thumbnail
            $thumbnail =  $manager->read($photo);
            $thumbnail = $thumbnail->resize(200, 200);
            $thumbnail->toJpeg(70)->save($thumbnailFullPath);



            $thumbnailUrl = asset('static/' . $thumbnailPath);
            // Store the original image data
            $dataOriginal = [
                'url' => $originalUrl,
                'thumbnail' => $thumbnailUrl,
                'group' => $project->id,
                'type' => 'ptoject',
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
            'doc',
            'link',
            'category'
        ]);
    }

    public function addCat()
    {
        $data = [
            'name' => $this->addCategory,
            'slug' => Str::slug($this->addCategory),
        ];
        Category::create($data);
        $this->addCatModal = false;
    }

    public function render()
    {
        $categories = Category::get();
        $clients = Client::all();
        return view('livewire.project.new-project', [
            'categories' => $categories,
            'clients' => $clients
        ]);
    }
}
