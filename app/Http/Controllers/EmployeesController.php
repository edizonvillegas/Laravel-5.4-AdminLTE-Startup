<?php

namespace App\Http\Controllers;

use App\Employees;
use Session;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class EmployeesController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Employees::paginate(10);
        return view('index-employees')->withEmployees($data);
    }

    public function create()
    {
        return view('create-employee');
    }

    public function store(request $request)
    {
        $fields = [
            'firstname',
            'lastname',
            'gender',
            'birthday',
            'email',
            'address'
        ];

        $this->validate($request,
            array_merge(
                array_fill_keys($fields, 'required'),
                ['photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048']
            )
        );

        if (Employees::where('email', $request->email)->count() == 0 ) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = 'storage/uploads/employees/default/';
            $image->move($destinationPath, $name);

            Employees::create(array_merge($request->except('_token', 'photo'), [
                'userRandomId' => str_random(60),
                'photo' => $destinationPath.$name,
                'status' => 1
            ]) );
            return redirect()->back()->withSuccess('Saved!'); 
        } else {
            return redirect()->back()->withSuccess('Already exists!'); 
        }
    }

    public function show($id)
    {
        $data = Employees::where('id', $id)->first();
        return view('show-employee')->withInfo($data);
    }

    public function edit($id)
    {
        $data = Employees::where('id', $id)->first();
        return view('edit-employee')->withInfo($data);
    }

    public function update(Request $request, Employees $employees)
    {
        $fields = [
            'firstname',
            'lastname',
            'gender',
            'birthday',
            'email',
            'address'
        ];

        $this->validate($request,
            array_merge(
                array_fill_keys($fields, 'required'),
                ['photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048']
            )
        );

        $check = Employees::where('userRandomId', $request->formSecret)->first();
        if($check->photo != "") {
            unlink($check->photo);
        }

        $image = $request->file('photo');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = 'storage/uploads/employees/default/';
        $image->move($destinationPath, $name);

        // $image_resize = Image::make($image->getRealPath());              
        // $image_resize->resize(300, 300);

        Employees::where('userRandomId', $request->formSecret)->update(
            array_merge(
                $request->except(['_token', '_method', 'formSecret']),
                ['photo' => $destinationPath.$name]
            )
        );
        return redirect()->back()->withSuccess('Updated!'); 
    }

    public function destroy($id)
    {
        $data = Employees::where('userRandomId', $id)->delete();
        return redirect('/employees')->withSuccess('Deleted!'); 
    }
}
