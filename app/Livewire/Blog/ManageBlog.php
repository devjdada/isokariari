<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class ManageBlog extends Component
{
    use WithPagination;
    public function edit(Blog $blog)
    {
        $this->redirect(route('edit-blog', ['slug' => $blog->slug]), navigate: true);
    }
    public function delete(Blog $blog)
    {
        $blog->delete();
        $this->resetPage();
    }
    public function render()
    {
        $blogs = Blog::all();
        return view('livewire.blog.manage-blog', [
            'blogs' => $blogs,
        ]);
    }
}
