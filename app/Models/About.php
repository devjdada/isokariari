<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'achivement',
        'image',
        'logo',
        'logo2',
        'vision',
        'mission',
        'phone',
        'email',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
    ];
}
