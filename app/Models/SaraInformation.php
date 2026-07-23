<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaraInformation extends Model
{
    protected $fillable = [
        'profile_image',

        'goals',
        'activities',
        'specializations',

        'intro_title',
        'intro_text',

        'experience_years',

        'phone',
        'whatsapp',
        'instagram_username',
        'email',
    ];
}