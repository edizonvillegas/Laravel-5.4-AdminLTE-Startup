<?php

namespace App\Http\Controllers;
use App\Project as Proj;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
    	return view('/projects.index', [
    		'projects' => Proj::all()
    	]);
    }

    public function show($id)
    {
    	return view('/projects/show-project', [
    		'projects' => Proj::with('tasks.employees')->where('projects_id', $id)->first()
    	]);
    }
}
