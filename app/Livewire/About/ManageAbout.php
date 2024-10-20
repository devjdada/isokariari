<?php

namespace App\Livewire\About;

use App\Models\About;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class ManageAbout extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $achivement;
    public $image;
    public $logo;
    public $logo2;
    public $imageNew;
    public $logoNew;
    public $logo2New;
    public $vision;
    public $mission;
    public $phone;
    public $email;
    public $address;
    public $facebook;
    public $twitter;
    public $instagram;
    public $linkedin;

    public function mount()
    {
        $about = About::first();
        $this->title = $about->title;
        $this->description = $about->description;
        $this->achivement = $about->achivement;
        $this->image = $about->image;
        $this->logo = $about->logo;
        $this->logo2 = $about->logo2;
        $this->vision = $about->vision;
        $this->mission = $about->mission;
        $this->phone = $about->phone;
        $this->email = $about->email;
        $this->address = $about->address;
        $this->facebook = $about->facebook;
        $this->twitter = $about->twitter;
        $this->instagram = $about->instagram;
        $this->linkedin = $about->linkedin;
    }

    public function update()
    {
        $imageNew  =  $this->image;
        $logoNew  =  $this->logo;
        $logo2New =  $this->logo2;
        $static =  'static/';
        if (isset($this->imageNew)) {
            $imageNew   = asset($static . $this->imageNew->store('images'));
        }
        if (isset($this->logoNew)) {
            $logoNew   = asset($static . $this->logoNew->store('images'));
        }
        if (isset($this->logo2New)) {
            $logo2New   = asset($static . $this->logo2New->store('images'));
        }
        $about = About::first();
        $about->title = $this->title;
        $about->description = $this->description;
        $about->achivement = $this->achivement;
        $about->image = $imageNew;
        $about->logo = $logoNew;
        $about->logo2 = $logo2New;
        $about->vision = $this->vision;
        $about->mission = $this->mission;
        $about->phone = $this->phone;
        $about->email = $this->email;
        $about->address = $this->address;
        $about->facebook = $this->facebook;
        $about->twitter = $this->twitter;
        $about->instagram = $this->instagram;
        $about->linkedin = $this->linkedin;
        $about->save();
        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'About updated successfully',
        ]);
    }

    public function render()
    {
        // $about = About::first();
        return view('livewire.about.manage-about');
    }
}
