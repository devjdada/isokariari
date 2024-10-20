<div class="">
    <div class="flex justify-between">
        <x-header title="CLients" subtitle="Manage Client" size="text-xl" separator />
        <x-button label='New Client' @click="$wire.addClientModal = true" />
    </div>
    <x-modal wire:model="addClientModal" class="backdrop-blur" persistent>
        <form wire:submit="saveClient">
            <h1>Add New Client</h1>
            <x-file label="Image" wire:model="clientLogo" class="mb-4" />
            <x-input label="Client Name" wire:model="clientName" class="mb-4" />
            <x-input label="Client Link" wire:model="clientLink" class="mb-4" />
            <x-button label="Save" class="btn-primary" type='submit' spinner="saveClient" />
            <x-button label="Cancel" @click="$wire.addClientModal = false" />
        </form>
    </x-modal>

    @foreach ($clients as $client)
        <x-list-item :item="$client" value="client" link="client_link" avatar="client_logo" />
    @endforeach

</div>
