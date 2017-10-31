<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notification;

use Auth;

class NotificationController extends Controller
{
   
   public static function setNotification(){
   		return self::create($data);
   }

   public static function removeNotification(){
   		return self::delete($data);
   }

   public static function toggleNotice(){
         
   		return self::toggleStatus(self::getUserNotification());

   }

   public static function getUserNotification(){
      return Notification::where([
                                 ['status','=','1'],
                                 ['user_id','=',Auth::user()->id],
                                 ])->get();
   }

   public static function countUserNotification(){
      return count(self::getUserNotification());
   }

   protected static function create(array $data){
   		
         return Notification::create([
               'title'=>$data['title'],
               'content'=>$data['content'],
               'link'=>$data['link'],
               'status'=>'1',
               'user_id'=>Auth::user()->id,
            ]);

   }

   protected static function delete(array $id){
   	
      foreach($id as $notice_id){
         $notification = Notification::find($notice_id);
         $notification->delete();
      }

      return true;

   }

   protected static function toggleStatus($notice){
   	//toggle the status of multiple notificactions
      
      foreach($notice as $note){
         
         if($note->status="1"){
            $note->status = "0";
         }  
        
         $note->save();
      }

      return true;
   }


}
