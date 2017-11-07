<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\InstitutionController as IC;
use App\Http\Controllers\SubscriptionController as SC;
use App\Http\Controllers\StudentController as StC;
use App\Http\Controllers\NotificationController as NC;


use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $msg = "";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application home.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                       
       if(IC::getUserInst()){
             $inst = IC::getUserInst()->id;
       }else{
            $inst = "0";
       } 
       
       if(NC::getUserNotification()){

             $notice = NC::getUserNotification();
             //after getting notice
             //update the notice status
       }else{
            $notice = "";         
       }
        
       if(SC::getUserSub()){
             $sub = SC::getUserSub()->id;
       }else{
            $sub = "0";
       }
       

        if(IC::countInstStudents()){
             $instStuCount = IC::countInstStudents();
       }else{
            $instStuCount = "0";
       }    
    //    return $instStuCount;
       $noticeCount = NC::countUserNotification();

        return view('home')->with('inst',$inst)
                            ->with('sub',$sub)
                            ->with('stu',$instStuCount)
                            ->with('notice',$notice)
                            ->with('noticeCount',$noticeCount)
                            ->with('msg',$this->msg);
    } 
	
    public function addInstitution(){
        // Check if institution is set
        $inst = IC::getUserInst();

        if(isset($inst->id) == "" || $inst == NULL){ 
          
           //if not set, set insitution
                if(IC::addInstitution($_POST)){
                    $this->msg = "Your institution has been added";
                    return $this->index();
                }

            }else{
                //if already set, check subscription type
                $sub = SC::getUserSub();

                if($sub->sub_type == "free"){
                    //if free, restrict institution addition
                     $this->msg = "You cannot add more than one institution for free plan <a class='btn btn-sm btn-primary' type='submit'>I want to go premium</a>";
                    return $this->index();
                }else{
                    //if premium allow addition of more institutions
                    if(IC::addInstitution()){
                        $this->msg = "Your institution has been added";
                        return $this->index();
                    }

                }
            }
      
    }

    public function activateFreePlan(){

        $sub = SC::getUserSub();
            
        if(!isset($sub->id))
        {
            
            if(SC::activateFreePlan($_POST)){
            $this->msg = "Your free plan has been activated";
            return $this->index();
            } 
        }else{

             $this->msg = "You already have free plan activated, would you like to go premium? <a class='btn btn-sm btn-primary' type='submit'>Yes, I want to go premium</a>";
           
            return $this->index();
        }
        

    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public static function dashboard()
    {
        
        $stuCount = IC::countInstStudents();

        if(IC::getInstDetails()){
             $instDetails = IC::getInstDetails();
         }     
         if(IC::countInstStudents()){
             $instStuCount = IC::countInstStudents();
         }else{
            $instStuCount = 0;
         }     

         if(SC::getUserSub()){
             $userSub = SC::getUserSub();
         }       

         if(NC::getUserNotification()){
             $notice = NC::getUserNotification();  
         }else{
            $notice = '';
         }

        $noticeCount = NC::countUserNotification();

        return view('welcome')->with('stuCount',$stuCount)
                                ->with('noticeCount',$noticeCount)
                                ->with('instDetails',$instDetails)
                                ->with('userSub',$userSub)
                                ->with('instStuCount',$instStuCount)
                                ->with('notice',$notice);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public static function clearNotice()
    {
       
         if(NC::toggleNotice()){
            return self::dashboard();
         }
    }

 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public static function allInstStudents()
    {
        $noticeCount = NC::countUserNotification();

        if(IC::getInstStudents()){
             $students = IC::getInstStudents();
         }else{
            $students="";
         }
       
       
         return view('students')->with('instStu',$students)->with('noticeCount',$noticeCount);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
       
        return IC::getInstDetails();
    }
}
