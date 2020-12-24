<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutapp extends Model
{
    protected $fillable = [
        'app_name', 'wireframes', 'app_idea', 'idea', 'lookfor', 'website'
    ];
}
