@php
    $config = [
        'statusbar' => true,
        'quickbars_selection_toolbar' => 'bold italic link ',
        'min_height' => 250,
        'max_height' => 650,
        'plugins' =>
            'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount autoresize code',
        'toolbar' =>
            'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat code',
    ];
@endphp

<div>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <x-form wire:submit="update">
            <div class="grid grid-cols-2 gap-4">
                @if ($image)
                    <x-file wire:model="imageNew" label="Cover Image">
                        <img src="{{ $image ?? $imageNew }}" class="h-40 rounded-lg" />
                    </x-file>
                @else
                    <x-file wire:model="imageNew" label="Cover Image" />
                @endif
                @if ($logo)
                    <x-file wire:model="logoNew" label="Vision Image">
                        <img src="{{ $logo ?? $logoNew }}" class="h-40 rounded-lg" />
                    </x-file>
                @else
                    <x-file wire:model="logoNew" label="Vision Image" />
                @endif
                @if ($logo2)
                    <x-file wire:model="logo2New" label="Mision Image">
                        <img src="{{ $logo2 ?? $logo2New }}" class="h-40 rounded-lg" />
                    </x-file>
                @else
                    <x-file wire:model="logo2New" label="Mision Image" />
                @endif
            </div>
            <div class="grid grid-cols-2 gap-4">
                <x-input label="Email" wire:model="email" />
                <x-input label="Mobile Number" wire:model="phone" />
                <x-input label="Facebook" wire:model="facebook" />
                <x-input label="Twitter" wire:model="twitter" />
                <x-input label="Instagram" wire:model="instagram" />
                <x-input label="Linkedin" wire:model="linkedin" />
            </div>
            {{-- <div class="grid grid-cols-4 gap-4">
                <x-input label="Title" wire:model="title" />
                <x-input label="Title" wire:model="title" />
                <x-input label="Title" wire:model="title" />
            </div> --}}
            <x-editor label="Achivement" wire:model="achivement" rows="3" />
            <div class="grid grid-cols-2 gap-4">
                <x-textarea label="Vision" wire:model="vision" rows="4" />
                <x-textarea label="Mission" wire:model="mission" rows="4" />
            </div>

            <x-textarea label="Address" wire:model="address" rows="2" />
            <x-editor wire:model="description" :config="$config" label="About" />

            <x-slot:actions>
                <x-button label="Cancel" wire:click='reset' />
                <x-button label="Save Project" class="btn-primary" type="submit" spinner="save" />
            </x-slot:actions>
        </x-form>
    </div>

</div>


@assets
    {{-- TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/4yzy9nevom5ra4g90f7z9x5s0lmqr8iue83ut31wlsiuyk76/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endassets
