<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subscription;
use Auth;

use App\Http\Controllers\InstitutionController as IC;



class SubscriptionController extends Controller
{
  
  	public static function getUserSub(){
		return Subscription::find(Auth::user()->id);
	}

	public static function activateFreePlan(array $data){

		return self::addSubscription($data);
	}

	protected static function addSubscription(array $data){
		if($data['sub_type'] == "free"){
			$expiry = "never";
		}else{
			$expiry = "get from transaction table";
		}
		return Subscription::create([				
				'user_id'=>Auth::user()->id,
				'sub_type'=> $data['sub_type'],
				'expires_on'=> $expiry,
				'status'=>"active"
			]);
	}

}
