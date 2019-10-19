<?php

namespace App\Http\Controllers;
use App\Qustion;
use JavaScript;
use App\User;
use App\toDolist;
use App\user_point;
use App\Answer;
use App\activites;
use Illuminate\Http\Request;
use App\Complain;
use  Illuminate\Support\Carbon;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



//   public function admin(){
//     $visitLogs = VisitLog::all();
//  return view('front.admin');

//   }
public function adminLogin(){
    $view_counter=0;
    $questions=Qustion::all();
    $monthly_trafic= array('01','02','03','04','05','06','07','08','09','10','11','12');
    $notAnswerdQuestions=0;
    $avargAnswersCountPerQ=0;
    $lastYearUsers=User::where('created_at','<',Carbon::now()->year-1)->where('created_at','>',Carbon::now()->year-2)->count();
    $newUsers=User::whereYear('created_at','>',Carbon::now()->year-1)->count();
    $lastComplains=Complain::where('created_at','<',Carbon::now()->year-1)->where('created_at','>',Carbon::now()->year-2)->count();
    $newComplains=Complain::whereYear('created_at','>',Carbon::now()->year-1)->count();
    if($lastYearUsers==0){
      $lastYearUsers=$newUsers;
    }
    if($lastComplains==0||null){
      $lastComplains=$newComplains;
    }
    $newComplains=(int)(($lastComplains/$newComplains)*100);
    $newUsers=(int)(($lastYearUsers/$newUsers)*100);
    $t=Qustion::whereYear('created_at','>',Carbon::now()->year-1)->get();
    
    $monthlyAnswerdQuestions=collect($monthly_trafic)->combine([0,0,0,0,0,0,0,0,0,0,0,0]);
    $ar=Array();
    foreach ($t as $key => $value) {
 $monthlyAnswerdQuestions[Carbon::parse($value->created_at)->format('m')]=collect($monthlyAnswerdQuestions[Carbon::parse($value->created_at)->format('m')])->push($value->answerd)->toArray();
 $avargAnswersCountPerQ=$avargAnswersCountPerQ+$value->answers->count();
 if(!$value->answerd){
    $notAnswerdQuestions=$notAnswerdQuestions+1;
  }   
}
$notAnswerdQuestions=(int)(($notAnswerdQuestions/$t->count())*100);
$avargAnswersCountPerQ=(int)(($t->count()/$avargAnswersCountPerQ)*100);
      

    $r=Qustion::selectRaw("MONTH(created_at) as month")->distinct()->get();
    
    foreach (Qustion::all() as $key => $v) {
      $view_counter=$view_counter+$v->views;
    }
    if ($view_counter>1000){

    }

        







    return view('admin.index',["complains"=>$newComplains,"newUsers"=>$newUsers,"avarg"=>$avargAnswersCountPerQ,"notAnswerd"=>$notAnswerdQuestions,"views"=>$view_counter,"months"=>$monthlyAnswerdQuestions->toArray()]);
}




















public function adminData(){
  $view_counter=0;
  $questions=Qustion::all();
  $monthly_trafic= array('01','02','03','04','05','06','07','08','09','10','11','12');
  
  // $t=Qustion::get()->GroupBy(function($id){
  //   return Carbon::parse($id->created_at)->format('m');

  // });

  $t=Qustion::where('created_at','>',Carbon::now()->year-1)->get();
  
  $monthlyAnswerdQuestions=collect($monthly_trafic)->combine([0,0,0,0,0,0,0,0,0,0,0,0]);
  $monthlyQuestions=collect($monthly_trafic)->combine([0,0,0,0,0,0,0,0,0,0,0,0]);
  $monthlyQuestionsViews=collect($monthly_trafic)->combine([0,0,0,0,0,0,0,0,0,0,0,0]);
  $ar=Array();
  foreach ($t as $key => $value) {
     
    $monthlyQuestions[Carbon::parse($value->created_at)->format('m')]=$monthlyQuestions[Carbon::parse($value->created_at)->format('m')]+1;
    $monthlyQuestionsViews[Carbon::parse($value->created_at)->format('m')]=$monthlyQuestionsViews[Carbon::parse($value->created_at)->format('m')]+$value->veiws;
    if($value->answerd){
    $monthlyAnswerdQuestions[Carbon::parse($value->created_at)->format('m')]=$monthlyAnswerdQuestions[Carbon::parse($value->created_at)->format('m')]+1;
  
   }
  }


 
  
  return response()->json([$monthlyQuestionsViews->toArray(), $monthlyAnswerdQuestions->toArray(),$monthlyQuestions->toArray()]);
}

public function getActivites(){

 $activites=activites::OrderBy('created_at','desc')->limit(10)->get();

if((activites::count())>10000){
  activites::truncate();
}

return response()->json($activites);

}
 public function toDoList(Request $request){
  if($request->isMethod('post')){
  $v=new toDolist();
  $v->body=$request->message;
  $v->save();}

 return response()->json(toDolist::all());
 }

 public function toDoListDelete(Request $request){
  
  toDolist::find($request->id)->delete();

  

 return response()->json(toDolist::all());
 }
 public function toDoListcheck(Request $request){
 
  $v=toDolist::find($request->id);
  if($v->done){
    $v->done=false;
  }
  else{$v->done=true;}
  $v->save();
return response()->json($v);

 }

 public function getPoints(){

  $users=user_point::orderBy('points','desc')->limit(3)
  ->join('users','user_id','=','users.id')
  ->get();


  return response()->json($users);
 }
}


