<?php

namespace App\Http\Controllers;

use App\Employees as Emp;
use Session;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    
    public function index()
    {
        return view('employees.index-employees', [
            'employees' => Emp::all()
        ]);
    }

    public function create()
    {
        return view('employees.create-employee');
    }

    public function store(request $request)
    {
        $fields = array_keys($request->except('_token', 'userRandomId') );

        $validation = $this->validate($request,
            array_merge(
                array_fill_keys($fields, 'required'),
                ['photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048']
            )
        );
        
        $users  =   new \App\User;
        
        if ($users::where('email', $request->email)->count() === 0) {

            $image                    =     $request->file('photo');
            $name                     =     time().'.'.$image->getClientOriginalExtension();
            $destinationPath          =     'storage/uploads/employees/default/';
            $randomId                 =     str_random(60);
            
            /*----------------------------
            |   E  M P L O Y E E
            -----------------------------*/
            Emp::create(
                array_merge($request->all(), [
                    'userRandomId'    =>    $randomId,
                    'photo'           =>    $destinationPath.$name
                ])
            );

            /*----------------------------
            |   U S E R
            -----------------------------*/
            $users::create([
                'name'                =>    $request->firstname." ".$request->Lastname,
                'email'               =>    $request->email,
                'position'            =>    2,
                'password'            =>    bcrypt($request->firstname.$request->lastname),
                'remember_token'      =>    $request->_token
            ]);


            /*----------------------------
            |   F A M I L Y
            -----------------------------*/
            $family   =   new \App\Family;

            $family::create([
                'mother_firstname'    =>    $request->mother_firstname,// mother
                'mother_lastname'     =>    $request->mother_lastname,
                'mother_birthdate'    =>    $request->mother_birthdate,
                'mother_occupation'   =>    $request->mother_occupation,
                'father_firstname'    =>    $request->father_firstname,// father
                'father_lastname'     =>    $request->father_lastname,
                'father_birthdate'    =>    $request->father_birthdate,
                'father_occupation'   =>    $request->father_occupation
            ]);


            /*----------------------------
            |   A D D R E S S
            -----------------------------*/
            $address   =   new \App\Address;

            $address::create([
                'present_address_no'            =>      $request->present_address_no,
                'present_address_street'        =>      $request->present_address_street,
                'present_address_barangay'      =>      $request->present_address_barangay,
                'present_address_city'          =>      $request->present_address_city,
                'present_address_country'       =>      $request->present_address_country,
                'present_address_zipcode'       =>      $request->present_address_zipcode,
                'permanent_address_no'          =>      $request->permanent_address_no,
                'permanent_address_street'      =>      $request->permanent_address_street,
                'permanent_address_barangay'    =>      $request->permanent_address_barangay,
                'permanent_address_city'        =>      $request->permanent_address_city,
                'permanent_address_country'     =>      $request->permanent_address_country,
                'permanent_address_zipcode'     =>      $request->permanent_address_zipcode
            ]);

            /*----------------------------
            |   E D U C A T I O N
            -----------------------------*/
            $education   =   new \App\Education;

            $education::create([
                'primary_school_name'           =>      $request->primary_school_name,
                'primary_school_year_from'      =>      $request->primary_school_year_from,
                'primary_school_year_to'        =>      $request->primary_school_year_to,
                'secondary_school_name'         =>      $request->secondary_school_name,
                'secondary_school_year_from'    =>      $request->secondary_school_year_from,
                'secondary_school_year_to'      =>      $request->secondary_school_year_to,
                'college_school_name'           =>      $request->college_school_name,
                'college_school_course'         =>      $request->college_school_course,
                'college_school_year_from'      =>      $request->college_school_year_from,
                'college_school_year_to'        =>      $request->college_school_year_to
            ]);

            /*----------------------------------
            |   S C H O O L  A D D R E S S
            ----------------------------------*/
            $schoolAddress   =   new \App\School_address;

            $schoolAddress::create([
                'primary_address_no'            =>      $request->primary_address_no,
                'primary_address_street'        =>      $request->primary_address_street,
                'primary_address_barangay'      =>      $request->primary_address_barangay,
                'primary_address_city'          =>      $request->primary_address_city,
                'primary_address_country'       =>      $request->primary_address_country,
                'primary_address_zipcode'       =>      $request->primary_address_zipcode,

                'secondary_address_no'          =>      $request->secondary_address_no,
                'secondary_address_street'      =>      $request->secondary_address_street,
                'secondary_address_barangay'    =>      $request->secondary_address_barangay,
                'secondary_address_city'        =>      $request->secondary_address_city,
                'secondary_address_country'     =>      $request->secondary_address_country,
                'secondary_address_zipcode'     =>      $request->secondary_address_zipcode,

                'college_address_no'            =>      $request->college_address_no,
                'college_address_street'        =>      $request->college_address_street,
                'college_address_barangay'      =>      $request->college_address_barangay,
                'college_address_city'          =>      $request->college_address_city,
                'college_address_country'       =>      $request->college_address_country,
                'college_address_zipcode'       =>      $request->college_address_zipcode
            ]);

            /*----------------------------
            |   A D D R E S S
            -----------------------------*/
            $experienced   =   new \App\Experience;

            $experienced::create([
                'experienced_user_id'            =>      $randomId,
                'experienced_company_name'       =>      $request->present_address_no,
                'experienced_company_position'   =>      $request->experienced_company_position,
                'experienced_company_start'      =>      $request->experienced_company_start,
                'experienced_company_end'        =>      $request->experienced_company_end,
            ]);

            $users ? $image->move($destinationPath, $name) : "";

            return redirect()->back()->withSuccess('Saved!'); 
        } else {
            return redirect()->back()->withFailed('Email already exists!'); 
        }
    }

    public function show($id)
    {
        return view('employees.show-employee', [
            'info' => Emp::with(['tasks.projects', 'statuses', 'family', 'address', 'education', 'school_address'])->where('employee_id', $id)->first()
        ]);
    }

    public function edit($id)
    {
        return view('employees.edit-employee', [
            'info' => Emp::with(['statuses', 'family', 'address', 'education'])->where('employee_id', $id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $fields = array_keys($request->except('_token', 'userRandomId', 'id', 'oldPhoto') );

        $this->validate($request,
            array_merge(
                array_fill_keys($fields, 'required'),
                ['photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048']
            )
        );
        
        $users  =   new \App\User;

        $checkEmail = $users::where('email', $request->email)->first();

        if($checkEmail->email == $request->email && $checkEmail->id == $request->id || $checkEmail->email != $request->email && $checkEmail->id != $request->id) {
            $check = Emp::where('userRandomId', $request->formSecret)->first();


            $image = $request->file('photo');
            $destinationPath = 'storage/uploads/employees/default/';
            if ($request->file('photo') ) {
                $check->photo ? unlink($check->photo ) : "";
                $name = time().'.'.$image->getClientOriginalExtension();
                $newPhoto = $destinationPath.$name;
            }

           if ($request->file('photo') ) {
                $finalPhoto = $newPhoto;
                $image->move($destinationPath, $name);
            } else {
                $finalPhoto = $request->oldPhoto;
            }

            Emp::where('userRandomId', $request->formSecret)->update([
                'firstname'     =>  $request->firstname,
                'lastname'      =>  $request->lastname,
                'gender'        =>  $request->gender,
                'birthday'      =>  $request->birthday,
                'phone'         =>  $request->phone,
                'photo'         =>  $finalPhoto,
                'status'        =>  $request->status,
            ]);

            $users  =   new \App\User;
            $users::where('id', $request->id)->update([
                'name'     => $request->firstname." ".$request->lastname,
                'email'    => $request->email
            ]);

            /*----------------------------
            |   F A M I L Y
            -----------------------------*/
            $family   =   new \App\Family;

            $family::where('family_id', $request->id)->update([
                'mother_firstname'    =>    $request->mother_firstname,// mother
                'mother_lastname'     =>    $request->mother_lastname,
                'mother_birthdate'    =>    $request->mother_birthdate,
                'mother_occupation'   =>    $request->mother_occupation,
                'father_firstname'    =>    $request->father_firstname,// father
                'father_lastname'     =>    $request->father_lastname,
                'father_birthdate'    =>    $request->father_birthdate,
                'father_occupation'   =>    $request->father_occupation
            ]);


            /*----------------------------
            |   A D D R E S S
            -----------------------------*/
            $address   =   new \App\Address;

            $address::where('address_id', $request->id)->update([
                'present_address_no'            =>      $request->present_address_no,
                'present_address_street'        =>      $request->present_address_street,
                'present_address_barangay'      =>      $request->present_address_barangay,
                'present_address_city'          =>      $request->present_address_city,
                'present_address_country'       =>      $request->present_address_country,
                'present_address_zipcode'       =>      $request->present_address_zipcode,
                'permanent_address_no'          =>      $request->permanent_address_no,
                'permanent_address_street'      =>      $request->permanent_address_street,
                'permanent_address_barangay'    =>      $request->permanent_address_barangay,
                'permanent_address_city'        =>      $request->permanent_address_city,
                'permanent_address_country'     =>      $request->permanent_address_country,
                'permanent_address_zipcode'     =>      $request->permanent_address_zipcode
            ]);

            /*----------------------------
            |   F A M I L Y
            -----------------------------*/
            $education   =   new \App\Education;

            $education::where('education_id', $request->id)->update([
                'primary_school_name'           =>      $request->primary_school_name,
                'primary_school_year_from'      =>      $request->primary_school_year_from,
                'primary_school_year_to'        =>      $request->primary_school_year_to,
                'secondary_school_name'         =>      $request->secondary_school_name,
                'secondary_school_year_from'    =>      $request->secondary_school_year_from,
                'secondary_school_year_to'      =>      $request->secondary_school_year_to,
                'college_school_name'           =>      $request->college_school_name,
                'college_school_course'         =>      $request->college_school_course,
                'college_school_year_from'      =>      $request->college_school_year_from,
                'college_school_year_to'        =>      $request->college_school_year_to
            ]);

            /*----------------------------------
            |   S C H O O L  A D D R E S S
            ----------------------------------*/
            $schoolAddress   =   new \App\School_address;

            $schoolAddress::where('school_address_id', $request->id)->update([
                'primary_address_no'            =>      $request->primary_address_no,
                'primary_address_street'        =>      $request->primary_address_street,
                'primary_address_barangay'      =>      $request->primary_address_barangay,
                'primary_address_city'          =>      $request->primary_address_city,
                'primary_address_country'       =>      $request->primary_address_country,
                'primary_address_zipcode'       =>      $request->primary_address_zipcode,

                'secondary_address_no'          =>      $request->secondary_address_no,
                'secondary_address_street'      =>      $request->secondary_address_street,
                'secondary_address_barangay'    =>      $request->secondary_address_barangay,
                'secondary_address_city'        =>      $request->secondary_address_city,
                'secondary_address_country'     =>      $request->secondary_address_country,
                'secondary_address_zipcode'     =>      $request->secondary_address_zipcode,

                'college_address_no'            =>      $request->college_address_no,
                'college_address_street'        =>      $request->college_address_street,
                'college_address_barangay'      =>      $request->college_address_barangay,
                'college_address_city'          =>      $request->college_address_city,
                'college_address_country'       =>      $request->college_address_country,
                'college_address_zipcode'       =>      $request->college_address_zipcode
            ]);

            return redirect()->back()->withSuccess('Updated!'); 
        } else {
            return redirect()->back()->withFailed('Email already exists!'); 
        }
    }

    public function destroy($id)
    {
        $data = Emp::where('userRandomId', $id)->delete();
        return redirect('/employees')->withSuccess('Deleted!'); 
    }
}
