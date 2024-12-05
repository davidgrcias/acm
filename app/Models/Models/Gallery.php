<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['image', 'label', 'order'];

    // Ensure 'order' is treated as an integer.
    protected $casts = [
        'order' => 'integer',
    ];
}
