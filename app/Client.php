<?php

namespace App;
use Carbon\Carbon;
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

    function getCreatedAtAttribute($date)
    {
    	$newdate = new Carbon($date);
    	return $newdate->format('M-d-Y');
    }

}
