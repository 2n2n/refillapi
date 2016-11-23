<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'usertype_id','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function getUsernameAttribute($value) 
    {
        return empty($value)? 'Inactive' : $value;
    }

    function userRole() 
    {
        return $this->belongsTo('App\UserRole', 'usertype_id');
    }
}
