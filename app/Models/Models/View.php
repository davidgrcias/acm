<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class View extends Model
{
    use HasFactory;

    protected $table = 'views';

    protected $fillable = [
        'favicon_logo',
        'title',
        'organization_name',
        'greeting_message',
        'placeholder_text',
        'introduction_banner_1',
        'introduction_banner_2',
        'introduction_banner_3',
        'introduction_banner_4',
        'tagline',
        'tagline_meaning',
        'explanation',
        'testimonial_title',
        'testimonial_image_1',
        'testimonial_image_2',
        'contact_title',
        'contact_name',
        'contact_phone_number',
        'contact_email',
        'copyright_text',
        'instagram_link',
        'whatsapp_link',
        'linktree_link',
        'gmail_link',
    ];

    public function view(): HasOne
    {
        return $this->hasOne(View::class);
    }
}
