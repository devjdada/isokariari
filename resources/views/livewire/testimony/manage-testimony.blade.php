<div class="">
    <div class="flex justify-between">
        <x-header title="Custumer Testimony" subtitle="Manage all your Custumer Testimony" size="text-xl" separator />
        <x-button label='New Testimony' @click="$wire.addTestyModal = true" />
    </div>
    <x-modal wire:model="addTestyModal" class="backdrop-blur" persistent>
        <form wire:submit="saveTestimony">
            <h1>Add Custumer Testimony</h1>
            <x-file label="Image" wire:model="avatar" class="mb-4" />
            <x-input label="Customer Name" wire:model="name" class="mb-4" />
            <x-input label="title/Position" wire:model="title" class="mb-4" />
            <x-textarea label="Testimony" wire:model="doc" class="mb-4" />
            <x-button label="Save" class="btn-primary" type='submit' spinner="saveTestimony" />
            <x-button label="Cancel" @click="$wire.addTestyModal = false" />
        </form>
    </x-modal>

    @foreach ($testimonies as $t)
        <x-list-item :item="$t">
            <x-slot:avatar>
                <x-avatar :image="$t->avatar" class="!w-18 !rounded-lg" />
            </x-slot:avatar>
            <x-slot:value>
                {{ $t->name }} | {{ $t->title }}
            </x-slot:value>
            <x-slot:sub-value>
                {{ $t->doc }}
            </x-slot:sub-value>
            <x-slot:actions>
                <x-button icon="o-trash" class="text-red-500 btn-sm" wire:click="delete({{ $t }})" />
                {{-- <x-button icon="o-trash" class="text-green-500 btn-sm" wire:click="delete(1)" /> --}}
                <x-button icon="o-trash" class="text-blue-500 btn-sm" wire:click="edit({{ $t }})" />
            </x-slot:actions>
        </x-list-item>
    @endforeach

</div>
