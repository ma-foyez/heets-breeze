<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $fillable = [
        'website_name',
        'website_slogan',
        'website_description',
        'website_logo',
        'website_footer_logo',
        'website_favicon',
        'website_email',
        'website_phone',
        'office_address',
        'about_content',
        'about_image',
        'facebook_page',
        'instagram_page',
        'linkedin_page',
        'whatsapp_number',
        'youtube',
        'skype',

    ];
}
