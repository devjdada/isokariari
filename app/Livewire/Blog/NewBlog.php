<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]

class NewBlog extends Component
{
    use WithFileUploads;
    public $image;
    public $title;
    public $description;
    public $content;
    public $category;
    public $author;


    public $addCategory;

    public bool $addCatModal = false;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'image|max:1024',
        ]);
        $img =  asset('static/' . $this->image->store('blogs'));

        $data = [
            'title' => $this->title,
            'image' => $img,
            'description' => $this->description,
            'content' => $this->content,
            'slug' => Str::slug($this->title),
            'category' => $this->category,
            'author' => $this->author,
            'post_by' => Auth::user()->id,
        ];
        Blog::create($data);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->reset([
            'title',
            'content',
            'description',
            'image',
            'author',
            'category',
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
        return view('livewire.blog.new-blog', [
            'categories' => $categories
        ]);
    }
}
