<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Students;
use Auth;
use App\Http\Controllers\InstitutionController as IC;
use App\Http\Controllers\HomeController as HC;


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

}

