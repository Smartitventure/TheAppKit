<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Role;
use App\ThemeCategory;
use App\ThemeTemplate;
use App\Usertheme;
use App\Collection;
use App\Payment_card;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'business_name', 'first_name','last_name','number', 'email','country','password','expiry_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function themeCategories(){
        return $this->hasMany('App\ThemeCategory');
    }

    public function themeTemplates(){
        return $this->hasMany('App\ThemeTemplate');
    }

    public function userthemes(){
        return $this->hasMany('App\Usertheme');
    }

    public function collections(){
        return $this->hasMany('App\Collection');
    }
     
    public function payment_cards(){
        return $this->hasMany('App\Payment_card');
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
