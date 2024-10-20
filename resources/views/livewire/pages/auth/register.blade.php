<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts.guest')] class extends Component {
    use WithFileUploads;
    public string $name = '';
    public string $email = '';
    public string $title = '';
    public string $facebook = '';
    public string $linkedin = '';
    public string $twitter = '';
    public string $password = '';
    public string $phone = '';
    public string $newImage = '';
    public string $about = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'about' => ['required', 'string', 'max:255'],
            'facebook' => ['required', 'string', 'max:255'],
            // 'twitter' => ['required', 'string', 'max:255'],
            'linkedin' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'newImage' => ['required', 'image|max:1024'],
        ]);

        if (isset($this->newImage)) {
            $validated['image'] = asset('static/' . $this->newImage->store('users'));
        }

        $validated['password'] = Hash::make($validated['password']);
        // dd($validated);
        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <form wire:submit="register">
        <!-- Name -->
        <div class="grid grid-cols-1 gap-4">
            <x-file label="Profile Image" wire:model="newImage" icon="o-user" inline />
            <x-input label="Full Name" wire:model="name" icon="o-user" inline />
            <x-input label="Job Title" wire:model="title" icon="o-user" inline />
            <x-input label="Email" wire:model="email" icon="o-envelope" inline />
            <x-input label="Phone" wire:model="phone" icon="o-envelope" inline />
            <x-textarea label="Bio" wire:model="about" placeholder="Your story ..." hint="Max 1000 chars"
                rows="3" inline />
            <x-input label="Linkedin" wire:model="linkedin" icon="o-envelope" inline />
            <x-input label="Facebook" wire:model="facebook" icon="o-envelope" inline />
            <x-input label="Twitter(X)" wire:model="twitter" icon="o-envelope" inline />
            <x-input label="Password" type="password" wire:model="password" icon="fas.lock" inline />
            <x-input label="Confirm Password" type="password" wire:model="password_confirmation" icon="fas.lock"
                inline />

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}" wire:navigate>
                    {{ __('Already registered?') }}
                </a>


            </div>
            <x-button label="Save" type="submit" class="btn-primary" spinner="register">
                {{ __('Register') }}
            </x-button>
        </div>

    </form>
</div>
