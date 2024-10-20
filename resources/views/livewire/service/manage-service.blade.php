<div>
    <x-header title="Services" subtitle="Manage all your services here" size="text-xl" separator />
    @foreach ($services as $service)
        <x-list-item :item="$service">
            <x-slot:avatar>
                <x-avatar :image="$service->image" class="!w-18 !rounded-lg" />
            </x-slot:avatar>
            <x-slot:value>
                {{ $service->title }} | {{ $service->category }}
            </x-slot:value>
            <x-slot:sub-value>
                {{ $service->description }}
            </x-slot:sub-value>
            <x-slot:actions>
                <x-button icon="o-trash" class="text-red-500 btn-sm" wire:click="delete({{ $service }})" />
                {{-- <x-button icon="o-trash" class="text-green-500 btn-sm" wire:click="delete(1)" /> --}}
                <x-button icon="o-trash" class="text-blue-500 btn-sm" wire:click="edit({{ $service }})" />
            </x-slot:actions>
        </x-list-item>
    @endforeach

</div>
