<?php

namespace App\Livewire\Home\Comp;

use App\Models\Blog as B;
use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        $blogs = B::where('status', 1)
            ->inRandomOrder()
            ->take(2)
            ->get();
        return view('livewire.home.comp.blog', [
            'blogs' => $blogs,
        ]);
    }
}
