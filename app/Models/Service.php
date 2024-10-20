<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'category',
        'slug',
        'status',
        'author',
        'post_by',
        'edit_by',
    ];
}
