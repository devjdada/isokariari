<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class Project extends Form
{

    public $title;
    public $description;
    public $about;
    public $image;
    public $link;
    public $slug;
    public $status;
    public $type;
    public $category;
    public $client;
    public $client_link;
    public $client_logo;
    public $post_by;
    public $edit_by;
}
