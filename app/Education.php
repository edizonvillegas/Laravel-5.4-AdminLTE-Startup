<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
    	'primary_school_name',
		'primary_school_year_from',
		'primary_school_year_to',
		'secondary_school_name',
		'secondary_school_year_from',
		'secondary_school_year_to',
		'college_school_name',
		'college_school_course',
		'college_school_year_from',
		'college_school_year_to'
    ];
}
