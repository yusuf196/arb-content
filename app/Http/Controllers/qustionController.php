<?php

namespace App\Http\Controllers;

use App\Answer;
use JavaScript;
use App\Catagory;

use App\Qustion;
use App\UserCatagory;
use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use PhpParser\Node\Expr\Array_;


class qustionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('front.cat_question');



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('front.ask_question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'title'=>'required|max:500',
                'body'=>'required',
                'catname'=>'required'


            ]);
            $newqustion = new Qustion();
            $newqustion->qustion_title = $request->input('title');
            $newqustion->qustion_desc = $request->input('body');
            $newqustion->catagoty_id = $request->input('catname');
            $newqustion->user_id = Auth::user()->id;
            $newqustion->save();

            return redirect('/home');
        }
        $qustions=Catagory::all();
        $arr=Array('qustions'=>$qustions);

        return view('front.ask_question',$arr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function selcata(Request $request)
    {
        if ($request->isMethod('post')) {
            $user_cat = array();
            $catArr = $request->input('box');
            $new = new UserCatagory();

            //dd(count($catArr));
            for($i=0; $i < count($catArr); $i++)
            {
                $user_cat[] = [
                    'catagoty_id' => $catArr[$i],
                    'user_id' => Auth::user()->id,
                ];
            }
            $new->insert($user_cat);
            return redirect('/selcat');



        }
        $cats=Catagory::all();
        $arr=Array('cats'=>$cats);

        return view('front.catagory',$arr);
    }
    public function catselect()
    {
        $cats=Catagory::all();
        return view('front.cat_index')->with('cats',$cats);
    }

    public function view(){

        $user_id = Auth::user()->id;
       $view=DB::select('select qustions.*,users.image_user,catagorys.cat_name  from users JOIN qustions ON(users.id=qustions.user_id) 
     
       join catagorys on (qustions.catagoty_id=catagorys.id) where catagoty_id in (select catagoty_id from userscatagories where user_id ='.$user_id.')');
//        $view=DB::select('select * from qustions where catagoty_id in
//(select catagoty_id from userscatagories  where user_id = '.$user_id.')');
$recentlyAnswerd=Qustion::where("answers_count",'>',0)
->join('users', 'qustions.user_id', '=', 'users.id')
->join('catagorys', 'qustions.catagoty_id', '=', 'catagorys.id')->orderBy('qustions.created_at','desc')
->get();
$mostAnswerd=Qustion::where("answers_count",'>',0)
->join('users', 'qustions.user_id', '=', 'users.id')
->join('catagorys', 'qustions.catagoty_id', '=', 'catagorys.id')->orderBy('qustions.created_at','desc')
->orderBy('answers_count','desc')->get();
        return response()->json([$view,$recentlyAnswerd,$mostAnswerd]);

    }
    public function viewqust(Request $request,$id){
        if ($request->isMethod('post')){
            $this->validate($request,['comment'=>'required']);
            $ar= new Answer();
            $qes= Qustion::find($id);
            $qes->answers_count=$qes->answers_count+1;  
            $ar->answer_text=$request->input('comment');
            $ar->qustion_id= $id;
            
            $ar->user_id= Auth::user()->id;
            $ar->save();
            $qes->save();
            DB::table('question_comments')
            ->join('users', 'users.id', '=', 'question_comments.user_id')
            ->select('question_comments.*', 'users.name')
            ->get();
         return redirect("/viewqust/$id");
        }

        
        $currint_user_id=Auth::user()->id;
        $currint_user_name=auth()->user()->name;
        $qst = Qustion::find($id);
       
        $ar=Array('qst'=>$qst);
        Javascript::put([ 'user_id' => $currint_user_id, 'user_name' =>$currint_user_name,'qst_id'=>$id]);
        $ans = Answer::where('qustion_id', '=', $id)->orderBy('rate','desc')->get();
  $qst->views=$qst->views+1;
        $ans_count=Answer::where('qustion_id', '=', $id)->orderBy('rate','desc')->count();
        $qst->save();
//        dd($ans);
        return view('front.single_question',['qst'=>$qst,'ans'=>$ans,'ans_count'=>$ans_count]);

    }

   public function new1(){
       return "view('front.single_question' );";

   }
   public function view2(){
       $user_id = Auth::user()->id;
       $view2=DB::select('select * from qustions join catagorys on (qustions.id=catagorys.id)');
//       dd($view2);
    return response()->json($view2);
   }
   public function editqustion(Request $request , $id){
       if ($request->isMethod('post')) {
           $this->validate($request,[
               'title'=>'required|max:500',
               'body'=>'required',
               'catname'=>'required'


           ]);
           $newqustion = Qustion::find($id);
           $newqustion->qustion_title = $request->input('title');
           $newqustion->qustion_desc = $request->input('body');
          
          
           $newqustion->save();

           return redirect('/home');
       }else{
           $qustionsss=Qustion::find($id);
           $arr=Array('qustionsss'=>$qustionsss);
       return View('front.edit',$arr);
//          dd($arr);
       }


   }
    public function editcomment(Request $request , $id)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, ['comment' => 'required']);
            $ar = Answer::find($id);
            $ar->answer_text = $request->input('comment');

            $ar->user_id = Auth::user()->id;
            $ar->save();

            return redirect('/viewqust/'.$ar->qustion_id);
        } else {
            $qustionsss = Answer::find($id);
            $arr = Array('qustionsss' => $qustionsss);
            return View('front.editcom', $arr);
//          dd($arr);
        }


    }

    public function getUserQuestions($id){
    $questions=\App\User::find($id)->qustions;

 return response()->json($questions);

    }



}
