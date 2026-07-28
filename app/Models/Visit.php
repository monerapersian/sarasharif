<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{

    protected $fillable = [

        'page_type',
        'post_id',
        'ip_address',

    ];

}