<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'doc',
        'image',
        'link',
        'slug',
        'status',
        'type',
        'category',
        'client',
        'client_link',
        'client_logo',
        'post_by',
        'edit_by',
    ];
}
