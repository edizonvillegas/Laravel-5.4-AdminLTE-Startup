<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
	public $timestamps = false;
    protected $fillable = ['firstname', 'lastname', 'gender', 'email', 'address', 'birthday', 'userRandomId', 'photo', 'status'];

}
