@php
    $config = [
        'statusbar' => true,
        'quickbars_selection_toolbar' => 'bold italic link ',
        'min_height' => 250,
        'max_height' => 650,
        'plugins' =>
            'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount autoresize',
        'toolbar' =>
            'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    ];
@endphp

<div>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <x-modal wire:model="addCatModal" class="backdrop-blur" persistent>
            <form wire:submit="addCat">
                <h1>Add Category</h1>
                <x-input label="Category" class="pt-4 pb-4" wire:model="addCategory" />
                <x-button label="Save" class="btn-primary" type='submit' />
                <x-button label="Cancel" @click="$wire.addCatModal = false" />
            </form>
        </x-modal>
        <x-form wire:submit="update">
            @if ($image)
                <x-file wire:model="imageNew" label="Cover Image">
                    <img src="{{ $image ?? $imageNew }}" class="h-40 rounded-lg" />
                </x-file>
            @else
                <x-file wire:model="imageNew" label="Cover Image" />
            @endif
            <x-input label="Title" wire:model="title" />

            <x-select label="Category" wire:model='category' option-value="name" :options="$categories" single>
                <x-slot:append>
                    <x-button label="Create" @click="$wire.addCatModal = true" icon="o-plus"
                        class="rounded-s-none btn-primary" />
                </x-slot:append>
            </x-select>

            <x-textarea label="Description" wire:model="description" rows="3" />
            <x-editor wire:model="doc" :config="$config" label="Document" hint="The full product description" />
            <x-input label="Client Name" wire:model="client" />
            <x-input label="Client Link" wire:model="client_link" />
            @if ($client_logo)
                <x-file wire:model="client_logoNew" label="Client Logo">
                    <img src="{{ $client_logo ?? $client_logoNew }}" class="h-40 rounded-lg" />
                </x-file>
            @else
                <x-file wire:model="client_logoNew" label="Client Logo" />
            @endif
            <x-slot:actions>
                <x-button label="Cancel" wire:click='reset' />
                <x-button label="Save Project" class="btn-primary" type="submit" spinner="update" />
            </x-slot:actions>
        </x-form>
    </div>

</div>


@assets
    {{-- TinyMCE --}}
    <script src="https://cdn.tiny.cloud/1/4yzy9nevom5ra4g90f7z9x5s0lmqr8iue83ut31wlsiuyk76/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endassets
