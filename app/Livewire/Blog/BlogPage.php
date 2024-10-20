<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.web')]
class BlogPage extends Component
{
    public function render()
    {
        $blogs = Blog::where('status', true)->get();
        return view('livewire.blog.blog-page', [
            'blogs' => $blogs
        ]);
    }
}
