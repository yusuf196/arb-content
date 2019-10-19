<?php

namespace App\Http\Controllers;
use Auth;
use App\Answer;
use App\Qustion;
use Illuminate\Http\Request;
use App\answer_user_rate;
class answersController extends Controller
{
  
    public function upvote(Request $request){
      
        $user=Auth::user()->id;
        $answer_id=$request->id;
        $answer=Answer::find($answer_id);
       
        $wher="main";
       
      $record=answer_user_rate::find([$user,$answer_id]);
     if(!$record==null){
         
       if($record->up==1){
           $answer->rate=$answer->rate-1;
           $record->up=2;
       }
       elseif($record->up==0){
       $answer->rate=$answer->rate+2; $record->up=1;}
      else{ $answer->rate=$answer->rate+1; $record->up=1; } 
     }
     else{
         $record=new answer_user_rate();
         
          $record->user_id=$user;
          $record->answer_id=$answer_id;
          $record->up=1;
          $answer->rate=$answer->rate+1;
     }
         
       $record->save();
        $answer->save();
       return response()->json($answer);

    }
    public function downvote(Request $request){
      
        $user=Auth::user()->id;
       $answer_id=$request->id;
       $answer=Answer::find($answer_id);
      
       $wher="main";
      
     $record=answer_user_rate::find([$user,$answer_id]);
    if(!$record==null){
        
      if($record->up==1){
          $answer->rate=$answer->rate-2;
          $record->up=0;
      }
      elseif($record->up==0){
      $answer->rate=$answer->rate+1; $record->up=2;}
     else{ $answer->rate=$answer->rate-1; $record->up=0; } 
    }
    else{
        $record=new answer_user_rate();
        
         $record->user_id=$user;
         $record->answer_id=$answer_id;
         $record->up=0;
         $answer->rate=$answer->rate-1;
    }
        
      $record->save();
       $answer->save();
      return response()->json($answer);

  }
  public function acceptAnswer(Request $request){

     $q=Qustion::find($request->id);
    $ans=Answer::find($request->ans_id);
    
   if(!$q==null){
    if($q->answerd){
        $q->answerd=false;
        
       $q->save();
    }
    else{
        $q->answerd=true;
        $q->save();
    }
   }
   if(!$ans==null){
       if($ans->accepted){$ans->accepted=false; $ans->save();}
       else{$ans->accepted=true; $ans->save();}
   }
    
   return response()->json($ans);


  }
  public function getacceptAnswer($id){
 
    $q=Qustion::find($id);
    
    return response()->json( $q->answers);
  }
}
