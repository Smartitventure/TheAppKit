<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutapp extends Model
{
    protected $fillable = [
        'app_name', 'app_logo','wireframes','app_idea',
    ];
}
