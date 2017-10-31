<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Institution;
use App\InsitutionUser as InstitutionUser;
use Auth;
use App\Http\Controllers\NotificationController as notifier;
use App\Http\Controllers\StudentController as StC;

class InstitutionController extends Controller
{
    
     public function __construct()
    {
       // $this->middleware('auth');
    }
	
	public function index(){
		
	}

	public static function addInstitution(array $data){

		//$data =  Request::all();
		//add company
		$inst = self::create($data);
		
		//get id of the last insert above
		
		//get user id
		$user_id = Auth::user()->id;

		//add user to company
		return self::addInstUser($inst->id,$user_id);		

		

	}

	public static function create(array $data){
   
		return Institution::create([
				"name"=> $data['name'],
				"email"=> $data['email'],
				"address"=> $data['address'],
				"website"=> $data['website'],
				"description"=> $data['description'],
				"motto"=> $data['motto'],
				"logo"=> "logopath",
				"createdBy"=> Auth::user()->id
			]);
	}

	public static function addInstUser($inst_id,$user_id){
		return InstitutionUser::create([
				"inst_id" => $inst_id,
				"user_id" => $user_id
			]);
	}

	public function checkInst(){
		
		if(count($this->getUserInst()) < 1){

			notifier::setNotification([
					'title'=> 'Institution Notice',
					'content' => 'you have no institution registered',
					'user_id' => Auth::user()->id,
					'link' => 'none'
				]);

		}

	}

	public static function getUserInst(){
		return InstitutionUser::where('user_id','=',Auth::user()->id)->first();
	}

	public static function getInstDetails(){
		$inst_id = self::getUserInst();

		return Institution::find($inst_id->inst_id);
	}

	public static function getInstStudents(){
		$instUser = InstitutionUser::where('user_id','=',Auth::user()->id)->get();
		
		if($instUser){

				return StC::getInstStudent($instUser[0]->inst_id);
		}
	}

	public static function countInstStudents(){
		return count(self::getInstStudents());
	}



}
