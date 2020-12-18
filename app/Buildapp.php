<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildapp extends Model
{
    protected $fillable = [
        'user_template','user_custom',
    ];
}
