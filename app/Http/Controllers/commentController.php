<?php

namespace App\Http\Controllers;
use App\Qustion;
use App\AnswerComment;
use Carbon\Carbon;
use DB;
Use App\Answer;
use Illuminate\Http\Request;
use Pusher\Pusher;
use App\question_comment;
use App\user_point;
class commentController extends Controller
{
    
    public function question_comments(Request $request){
  
        

       
      
        if($request->isMethod('post')){
         $new_comment=new question_comment();
         $new_comment->user_id=auth()->user()->id;
         $new_comment->body=$request->message;
         $new_comment->question_id=$request->id;
         $new_comment->save();}
        //  $v=question_comment::where('question_id',$request->id)->get();
         $v= DB::table('question_comments')
         ->join('users', 'users.id', '=', 'question_comments.user_id')
         ->select('question_comments.*', 'users.name','users.id as user_id' )
         ->where('question_id',$request->id)
         ->orderBy('created_at','desc')
         ->get();
        
           
         $response = $v;
         return response()->json($response);
        
        // else return "hrllo";


    }


    public function answer_comments(Request $request){
  


       
      
       if($request->isMethod('post')){
         $new_comment=new AnswerComment();
         $new_comment->user_id=auth()->user()->id;
         $new_comment->comment_answer=$request->message;
         $new_comment->answer_id=$request->id;
         $new_comment->save();}
        //  $v=question_comment::where('question_id',$request->id)->get();
        $v= DB::table('answerComments')
        ->join('users', 'users.id', '=', 'answerComments.user_id')
        ->select('answerComments.*', 'users.name')
        ->where('answer_id',$request->id)
        ->get();
        
           
         $response = $v;
         return response()->json($response);
        
        // else return "hrllo";


    }
    public function send(){

          //Remember to change this with your cluster name.
          $options = array(
            'cluster' => 'ap2', 
            'encrypted' => true
        );
 
       //Remember to set your credentials below.
        $pusher = new Pusher(
            '7300f6260bd538f771d3',
            'c174c058515d597729e0',
            '784686',
            $options
        );
        
        $message= "Hello User";
        
        //Send a message to notify channel with an event name of notify-event
        $pusher->trigger('notify', 'notify-event', $message); 
    }

    public function editMyComment(Request $request,$id){
        if($request->isMethod('post')){
          if($c=AnswerComment::find($id)){
             
            $c->comment_answer=$request->input('commentxx');
            $c->save();
          }
          
          
     return redirect('viewqust/'.$c->answer->qustion_id);

        }
    $comment=AnswerComment::find($id);
    return view('front.editComment',['comment'=>$comment]);
 
    }
    public function deleteMyComment($id){
       if($c=AnswerComment::find($id)){
        $c=$c->answer->qustion_id;
        AnswerComment::where('id','=',$id)->delete(); 
        return redirect('viewqust/'.$c);   
    }
    }
    ///


    public function editQComment(Request $request,$id){
        if($request->isMethod('post')){
          if($c=question_comment::find($id)){
             
            $c->body=$request->input('commentxx');
            $c->save();
          }
          
          
     return redirect('viewqust/'.$c->Question->id);

        }
    $comment=question_comment::find($id);
    return view('front.editQComment',['comment'=>$comment]);
 
    }
    public function deleteQComment($id){
       if($c=question_comment::find($id)){
       question_comment::where('id','=',$id)->delete();
       
        
     
        return redirect('viewqust/'.$c->Question->id);}
        else{return "error";}
    }
}
