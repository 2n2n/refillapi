<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'users_role';
    public $timestamps = false;

    function users()
    {
        return $this->hasMany('\App\User', 'id', 'user_type');
    }
}
