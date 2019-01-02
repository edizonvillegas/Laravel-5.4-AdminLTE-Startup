<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'birthday',
        'phone',
        'userRandomId',
        'photo',
        'status'
    ];

   public function tasks()
    {
    	return $this->hasMany('\App\Task', 'project_coder', 'employee_id');
    }

    public function statuses()
    {
        return $this->hasOne('\App\Status', 'status_id', 'status');
    }

    public function email()
    {
        return $this->hasOne('\App\User', 'id', 'employee_id');
    }

    public function family()
    {
        return $this->hasOne('\App\Family', 'family_id', 'employee_id');
    }

    public function address()
    {
        return $this->hasOne('\App\Address', 'address_id', 'employee_id');
    }

    public function education()
    {
        return $this->hasOne('\App\Education', 'education_id', 'employee_id');
    }
    
    public function school_address()
    {
        return $this->hasOne('\App\School_address', 'school_address_id', 'employee_id');
    }
    
    public function experiences()
    {
        return $this->hasOne('\App\Experience', 'experienced_user_id', 'userRandomId');
    }
}