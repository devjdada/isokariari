<div>
    <x-header title="Projects" subtitle="Manage all your projects here" size="text-xl" separator />
    @foreach ($projects as $project)
        <x-list-item :item="$project">
            <x-slot:avatar>
                <x-avatar :image="$project->image" class="!w-18 !rounded-lg" />
            </x-slot:avatar>
            <x-slot:value>
                {{ $project->title }} | {{ $project->category }}
            </x-slot:value>
            <x-slot:sub-value>
                {{ $project->description }}
            </x-slot:sub-value>
            <x-slot:actions>
                <x-button icon="o-trash" class="text-red-500 btn-sm"
                    wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE"
                    wire:click="delete({{ $project }})" />
                {{-- <x-button icon="o-trash" class="text-green-500 btn-sm" wire:click="delete(1)" /> --}}
                <x-button icon="o-trash" class="text-blue-500 btn-sm" wire:click="edit({{ $project }})" />
            </x-slot:actions>
        </x-list-item>
    @endforeach

</div>
