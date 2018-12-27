<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $employees = new \App\Employees;
        $result['count'] = $employees::count();

        $result['active'] = $employees::where('status', 1)->count();
        $result['inactive'] = $employees::where('status', 0)->count();
        
        return view('home')->withData($result);
    }
}
