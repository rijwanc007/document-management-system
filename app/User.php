<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
         'employee_pic','first_name','last_name','full_name','company','job_title','email','website','mobile_phone','home_phone','link_profile'
        ,'facebook','sky_id','password','confirm_password','address_location','address_area_division','address_two','notes','status'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
    public function todos(){
        return $this->belongsToMany('App\Todo');
    }
}
