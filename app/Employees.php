<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{

	public $timestamps = false;
    protected $fillable = ['firstname', 'lastname', 'gender', 'email', 'address', 'birthday', 'userRandomId', 'photo', 'status'];

    // public static function tasks($id)
    // {
    //     return DB::table('employees')
    //         ->select('employees.*', 'projects.*')
    //         ->leftjoin('tasks', 'tasks.project_coder', '=', 'employees.employees_id')
    //         ->leftjoin('projects', 'projects.projects_id', '=', 'tasks.project_id')
    //         ->where('employees.employees_id', '=', $id)
    //         ->get();
    // }

    public function tasks()
    {
    	return $this->hasMany('\App\Task', 'project_coder', 'employees_id');
    }

}