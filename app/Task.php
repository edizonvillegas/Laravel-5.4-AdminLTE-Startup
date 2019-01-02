<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function projects()
    {
    	return $this->hasMany('\App\project', 'projects_id', 'project_id');
    }

    public function employees()
    {
    	return $this->hasMany('\App\Employees', 'employee_id', 'project_coder');
    }
}
