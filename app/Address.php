<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	public $timestamps = false;
    protected $fillable = [
    	'present_address_no',
        'present_address_street',
        'present_address_barangay',
        'present_address_city',
        'present_address_country',
        'present_address_zipcode',
        'permanent_address_no',
        'permanent_address_street',
        'permanent_address_barangay',
        'permanent_address_city',
        'permanent_address_country',
        'permanent_address_zipcode'
    ];
}
