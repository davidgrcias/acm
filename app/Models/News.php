<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'text', 'cover_image', 'author', 'status'];
    protected $attributes = [
        'status' => 'draft',  // Default value
    ];
}
