<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School_address extends Model
{
    protected $fillable = [
    	'primary_address_no',    
		'primary_address_street',
		'primary_address_barangay',
		'primary_address_city',  
		'primary_address_country',
		'primary_address_zipcode',
		'secondary_address_no',  
		'secondary_address_street',
		'secondary_address_barangay',
		'secondary_address_city',
		'secondary_address_country',
		'secondary_address_zipcode',
		'college_address_no',    
		'college_address_street',
		'college_address_barangay',
		'college_address_city',  
		'college_address_country',
		'college_address_zipcode'
    ];
}
