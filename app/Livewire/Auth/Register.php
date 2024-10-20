<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Validation\Rules;
use Livewire\WithFileUploads;

#[Layout('layouts.guest')]
class Register extends Component
{
    use WithFileUploads;
    public string $name = '';
    public string $email = '';
    public string $title = '';
    public string $facebook = '';
    public string $linkedin = '';
    public string $twitter = '';
    public string $password = '';
    public string $phone = '';
    public  $newImage;
    public string $about = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'phone' => 'required',
            'about' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],

        ]);


        if (isset($this->newImage)) {
            $image = asset('static/' . $this->newImage->store('users'));
        }


        // dd($validated);
        event(new Registered(($user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'title' => $this->title,
            'facebook' => $this->facebook,
            'linkedin' => $this->linkedin,
            'twitter' => $this->twitter,
            'password' => Hash::make($this->password),
            'phone' => $this->phone,
            'about' => $this->about,
            'image' => $image,
        ]))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
