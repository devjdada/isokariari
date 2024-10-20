<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

#[Layout('layouts.app')]
class EditBlog extends Component
{

    use WithFileUploads;
    public $image;
    public $imageNew;
    public $title;
    public $description;
    public $content;
    public $category;
    public $author;
    public $slug;
    public Blog $blog;


    public $addCategory;

    public bool $addCatModal = false;

    public function mount()
    {
        $blog = Blog::whereSlug($this->slug)->first();
        $this->blog = $blog;
        $this->image = $blog->image;
        $this->title = $blog->title;
        $this->description = $blog->description;
        $this->content = $blog->content;
        $this->category = $blog->category;
        $this->author = $blog->author;
    }

    public function update()
    {
        $imageNew  =  $this->image;

        $static =  'static/';
        if (isset($this->imageNew)) {
            $imageNew   = asset($static . $this->imageNew->store('blogs'));
        }

        $this->blog->title = $this->title;
        $this->blog->slug = Str::slug($this->title);
        $this->blog->content = $this->content;
        $this->blog->description = $this->description;
        $this->blog->image = $imageNew;
        $this->blog->author = $this->author;
        $this->blog->category = $this->category;
        $this->blog->save();

        $this->redirect(route('manage-blogs'), navigate: true);
        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'About updated successfully',
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
        return view('livewire.blog.edit-blog', [
            'categories' => $categories
        ]);
    }
}
