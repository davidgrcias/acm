<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
{
    use HasFactory;
    protected $table = 'team_members';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'member_image',
        'role',
        'order',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'order' => 'integer',
    ];

    protected static function booted()
    {
        static::creating(function ($teamMember) {
            if ($teamMember->order <= 0) {
                throw new \Exception('Order must be a positive integer.');
            }
        });

        static::updating(function ($teamMember) {
            if ($teamMember->order <= 0) {
                throw new \Exception('Order must be a positive integer.');
            }
        });
    }
}
