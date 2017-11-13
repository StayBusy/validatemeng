<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Students;
use Auth;
use App\Http\Controllers\InstitutionController as IC;
use App\Http\Controllers\HomeController as HC;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }
	
	public function index(){
		
	}
	
	public static function getInstStudent($inst_id){
		return Students::where('schoolid','=',$inst_id)->get();
	}

	public function addStudent(Request $request){
		$validate = $this->validator($request->all());
		if($validate->fails()){
			return back()->withErrors($validate)
                        ->withInput($request->all());
		}
		if($this->create($request)){
			
			$message = "Student data added";
		
		}else{
			
			$message = "Student data not added";
			
		}
		return HC::dashboard();
	}

	protected function create($request){
			$student = new Students;
			$student->firstname = $request->firstname; 
			$student->lastname = $request->lastname;
			$student->othername = $request->othername;
			$student->phone = $request->phone;
			$student->email = $request->email;
			$student->sex = $request->sex;
			$student->dob = $request->dob; 
			$student->country_id = $request->country_id;
			$student->religion = $request->religion;
			$student->maritalstatus = $request->maritalstatus;
			$student->city = $request->city;
			$student->state_id = $request->state_id;
			$student->fathername = $request->fathername;
			$student->mothername = $request->mothername;
			$student->motherwork = $request->motherwork;
			$student->fatherwork = $request->fatherwork;
			$student->parentaddress = $request->parentaddress;
			$student->language = $request->language;
			$student->nokname = $request->nokname;
			$student->nokcontact = $request->nokcontact;
			$student->faculty = $request->faculty;
			$student->department = $request->department;
			$student->course = $request->course;
			$student->specilization = $request->specilization;
			$student->duration = $request->duration;
			$student->grade = $request->grade;
			$student->startdate = $request->startdate;
			$student->enddate = $request->enddate;
			$student->facultyhead = $request->facultyhead;
			$student->hod = $request->hod;
			$student->disability = $request->disability;
			$student->specialneeds = $request->specialneeds;
			$student->disability_specify = $request->disability_specify;
			$student->specialneeds_specify = $request->specialneeds_specify;
			$student->ca = $request->ca;
			$student->project = $request->project;
			$student->uid = $request->uid;
			$student->schoolid = IC::getUserInst()->inst_id;
			$student->user_id = Auth::user()->id;
			$student->save();
			return $student;
		
	}


	protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
			'lastname' => 'required|string|max:255',
			'othername' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
			'phone' => 'required|string|max:255',
			'sex' => 'required|string|max:255',
			'dob' => 'required|date',
			'country_id' => 'required|numeric',
			'religion' => 'required|string|max:255',
			'maritalstatus' => 'required|string|max:255',
			'city' => 'required|string|max:255',
			'state_id' => 'required|numeric',
			'fathername' => 'required|string|max:255',
			'mothername' => 'required|string|max:255',
			'fatherwork' => 'required|string|max:255',
			'motherwork' => 'required|string|max:255',
			'parentaddress' => 'required|string|max:255',
			'nokname' => 'required|string|max:255',
			'language' => 'required|string|max:255',
			'nokcontact' => 'required|string|max:255',
			'faculty' => 'required|string|max:255',
			'department' => 'required|string|max:255',
			'course' => 'required|string|max:255',
			'specilization' => 'required|string',
			'duration' => 'required|string|max:255',
			'grade' => 'required|string|max:255',
			'startdate' => 'required|date',
			'enddate' => 'required|date',
			'facultyhead' => 'required|string|max:255',
			'hod' => 'required|string|max:255',
			'disability' => 'required|string|max:255',
			'specialneeds' => 'required|string|max:255',

        ]);
    }

}

