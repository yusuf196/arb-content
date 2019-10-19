<?php

namespace App\Http\Controllers;
use App\notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class notificationController extends Controller
{
    
    
    public function getNotifications(){
      $v=notification::where('user_id','=',Auth::user()->id)->where('seen','=',false)->get();
   
      foreach ($v as $key => $value) {
         $value->seen=true;
          $value->save();
      }

      return response()->json($v);
    
    }
    public function getNotifications2(){
      $v=notification::where('user_id','=',Auth::user()->id)->whereDay('created_at','=',Carbon::now()->day)->orderBy('created_at','desc')->get();
      

   

      return response()->json($v);
    
    }
}
