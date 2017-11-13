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

	public function addStudent(){
		
		if($this->create($_POST)){
			
			$message = "Student data added";
		
		}else{
			
			$message = "Student data not added";
			
		}
		return HC::dashboard();
	}

	protected function create(array $data){
		
		return Students::create([
			'firstname' => $data['firstname'], 
			'lastname' => $data['lastname'],
			'othername' => $data['othername'],
			'phone' => $data['phone'],
			'email' => $data['email'],
			'sex' => $data['sex'],
			'dob' => $data['dob'], 
			'country' => $data['country'],
			'religion' => $data['religion'],
			'maritalstatus' => $data['maritalstatus'],
			'city' => $data['city'],
			'state' => $data['state'],
			'fathername' => $data['fathername'],
			'mothername' => $data['mothername'],
			'motherwork' => $data['motherwork'],
			'fatherwork' => $data['fatherwork'],
			'parentaddress' => $data['parentaddress'],
			'language' => $data['language'],
			'nokname' => $data['nokname'],
			'nokcontact' => $data['nokcontact'],
			'faculty' => $data['faculty'],
			'department' => $data['department'],
			'course' => $data['course'],
			'specilization' => $data['specilization'],
			'duration' => $data['duration'],
			'grade' => $data['grade'],
			'startdate' => $data['startdate'],
			'enddate' => $data['enddate'],
			'facultyhead' => $data['facultyhead'],
			'hod' => $data['hod'],
			'disability' => $data['disability'],
			'specialneeds' => $data['specialneeds'],
			'ca' => $data['ca'],
			'project' => $data['project'],
			'uid' => '1',
			'schoolid' => IC::getUserInst()->inst_id,
			'userid' => Auth::user()->name
		]);
		
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
			'country' => 'required|string|max:255',
			'religion' => 'required|string|max:255',
			'maritalstatus' => 'required|string|max:255',
			'city' => 'required|string|max:255',
			'state' => 'required|string|max:255',
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
			'specialization' => 'required|string|max:255',
			'duration' => 'required|string|max:255',
			'grade' => 'required|string|max:255',
			'startdate' => 'required|date',
			'enddate' => 'required|date',
			'facultyhead' => 'required|string|max:255',
			'hod' => 'required|string|max:255',
			'disability' => 'required|string|max:255',
			'specialneeds' => 'required|string|max:255',
			'ca' => 'required|string|max:255',
			'project' => 'required|string|max:255',
        ]);
    }

}

