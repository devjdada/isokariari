<?php

namespace App\Livewire\Client;

use App\Models\Client;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class ManageClient extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $addClientModal = false;
    public $clientLink;
    public $clientLogo;
    public $clientName;
    public Client $client;

    public function saveClient()
    {

        $this->validate([
            'clientLogo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'clientName' => 'required',
        ]);

        $avatar =   asset('static/' . $this->clientLogo->store('client'));
        Client::create([
            'client' => $this->clientName,
            'client_link' => $this->clientLink,
            'client_logo' => $avatar,
        ]);
        $this->reset([
            'clientName',
            'clientLink',
            'clientLogo',
        ]);
        $this->resetPage();

        $this->addClientModal = false;
    }

    public function render()
    {
        $clients = Client::all();
        return view('livewire.client.manage-client', [
            'clients' => $clients,
        ]);
    }
}
