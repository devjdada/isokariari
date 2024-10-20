<div>
    <x-header title="blogs" subtitle="Manage all your blogs here" size="text-xl" separator />
    @foreach ($blogs as $blog)
        <x-list-item :item="$blog">
            <x-slot:avatar>
                <x-avatar :image="$blog->image" class="!w-18 !rounded-lg" />
            </x-slot:avatar>
            <x-slot:value>
                {{ $blog->title }} | {{ $blog->category }} | {{ $blog->create_at }}
            </x-slot:value>
            <x-slot:sub-value>
                {{ $blog->description }}
            </x-slot:sub-value>
            <x-slot:actions>
                <x-button icon="o-trash" class="text-blue-500 btn-sm" wire:click="edit({{ $blog }})" />

                {{-- <x-button icon="o-trash" class="text-green-500 btn-sm" wire:click="delete(1)" spinner /> --}}
                <x-button icon="o-trash" class="text-red-500 btn-sm"
                    wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE"
                    wire:click="delete({{ $blog }})" />
            </x-slot:actions>
        </x-list-item>
    @endforeach

</div>
