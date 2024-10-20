<?php

namespace App\Livewire\Setting;

use App\Models\Slider;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class HeroSlider extends Component
{
    use WithFileUploads;
    public $addHeroModal = false;
    public $image;
    public $bigCaption;
    public $smallCaption;
    public $buttonText;
    public $buttonLink;
    public $isActive = true;
    public $sliderId;

    public function addHero()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bigCaption' => 'required',
            'smallCaption' => 'required',
        ]);

        $image =   asset('static/' . $this->image->store('hero'));



        Slider::create([
            'image' => $image,
            'bigCaption' => $this->bigCaption,
            'smallCaption' => $this->smallCaption,
            'buttonText' => $this->buttonText,
            'buttonLink' => $this->buttonLink,
            'isActive' => $this->isActive,
        ]);
        $this->reset([
            'image',
            'bigCaption',
            'smallCaption',
            'buttonText',
            'buttonLink',
        ]);

        $this->addHeroModal = false;
    }

    public function render()
    {
        $sliders = Slider::all();
        return view('livewire.setting.hero-slider', [
            'sliders' => $sliders
        ]);
    }
}
