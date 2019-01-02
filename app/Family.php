<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $fillable = [
    	'family_id',
    	'mother_firstname',
		'mother_lastname', 
		'mother_birthdate',
		'mother_occupation',
		'father_firstname',
		'father_lastname',
		'father_birthdate',
		'father_occupation'
    ];
}
