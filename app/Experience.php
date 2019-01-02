<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
    	'experienced_user_id',
		'experienced_company_name',
		'experienced_company_position',
		'experienced_company_start',
		'experienced_company_end'
    ];
}
