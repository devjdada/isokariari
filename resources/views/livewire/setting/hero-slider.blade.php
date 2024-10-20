<div class="">
    <div class="flex justify-between">
        <x-header title="Hero Slider" subtitle="Manage all your hero image" size="text-xl" separator />
        <x-button label='New Hero' @click="$wire.addHeroModal = true" />
    </div>
    <x-modal wire:model="addHeroModal" class="backdrop-blur" persistent>
        <form wire:submit="addHero">
            <h1>Add Hero</h1>
            <x-file label="Image" wire:model="image" class="mb-4" />
            <x-input label="Small Caption" wire:model="smallCaption" class="mb-4" />
            <x-input label="Big Caption" wire:model="bigCaption" class="mb-4" />
            <x-input label="Link" wire:model="link" class="mb-4" />
            <x-button label="Save" class="btn-primary" type='submit' spinner="addHero" />
            <x-button label="Cancel" @click="$wire.addHeroModal = false" />
        </form>
    </x-modal>
    <div class="grid grid-cols-2 gap-4">
        @foreach ($sliders as $slider)
            <div class="flex flex-col items-center justify-center "
                style="background-image: url('{{ $slider->image }}'); height:300px">

                <div class="flex flex-col items-center justify-center">
                    <h1 class="text-xl font-bold">{{ $slider->smallCaption }}</h1>
                    <h1 class="text-xl font-bold">{{ $slider->bigCaption }}</h1>
                    <div class="bottom-1 right-2 ">
                        <x-button label="Edit" class="btn-primary" @click="$wire.editHeroModal = true" />
                        <x-button label="Delete" class="btn-danger" @click="$wire.deleteHeroModal = true" />
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
