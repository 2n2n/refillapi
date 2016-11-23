<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $dates = [
        'created_at',
        'updated_at'
    ];
    
    protected $fillable = [
    	'first_name', 'last_name', 'phone_no', 'mobile_no', 'created_at', 'address'
    ];


}
