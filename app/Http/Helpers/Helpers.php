<?php

use \App\Employees as Emp;

if ( !function_exists('countStatus') ) {
	function countStatus($id)
	{
		if ($id > 0) {
	    	return Emp::where('status', $id)->count();
	    } else {
	    	return Emp::all()->count();
	    }
	}
}