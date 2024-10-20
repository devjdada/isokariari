<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'description',
        'status',
        'image',
        'author',
        'category',
        'post_by',
        'edit_by',
    ];
}
