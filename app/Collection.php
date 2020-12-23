<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;

class Collection extends Model
{
    protected $fillable = [
        'user_id',
        'template_id',
        'collection_name',
        'slug',
        'collection_description',
        'collection_image',
    ];

    public function user(){
        return $this->belongsTo('App\User');
   }
}
