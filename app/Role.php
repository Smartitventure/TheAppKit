<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;
class Role extends Model
{  
    public function users(){
        return $this->belongsToMany(User::class, 'role_user','user_id', 'role_id');
    }     
}
