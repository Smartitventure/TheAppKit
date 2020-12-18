<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Usertheme;
use App\ThemeCategory;

class ThemeTemplate extends Model
{
    protected $fillable = [
        'category_id','template_name','slug',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function usertheme(){
        return $this->belongsTo('App\Usertheme');
    }

    public function themeCategory(){
        return $this->belongsTo('App\ThemeCategory');
    }
}
