<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pushnotification extends Model
{
    protected $fillable = [
        'notify_email','notify_message',
    ];
}
