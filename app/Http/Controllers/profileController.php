<?php

namespace App\Http\Controllers;
use App\User;
use App\Qustion;
use App\Answer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Qustion::where('user_id',Auth::user()->id)->get();
        $user_questions=$questions->count();
        $accepted_answers=Answer::where('user_id',Auth::user()->id)->where('accepted',1)->get()->count();

        $user_answers=Answer::where('user_id',Auth::user()->id)->get()->count();
    
        return view('front.user_profile',['questions'=>$user_questions,'answers'=>$user_answers,'bestAnswers'=>$accepted_answers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('front.user_questions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       

        // Get current user
        $user = User::findOrFail(auth()->user()->id);
        // Set user name
        

        // Check if a profile image has been uploaded
       
            // Get image file
            
              
            $image = $request->file('select_file');
            // Make a image name based on user name and current timestamp
            $name = str_slug($user->name.'_'.time().'.'.$image->getClientOriginalExtension());
            // Define folder path
            $folder = 'images/users';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder .'/'. $name;
            // Upload image
            $image->move(public_path('images/users'), $name);
            // Set user profile image path in database to filePath
            $user->image_user = $filePath;
     
        // Persist user record to database
        $user->save();
               

        // Return user back and show a flash message
        return redirect()->route('catselector')->with(['status' => 'Profile updated successfully.']);
        
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        $questions=Qustion::where('user_id',$id)->get();
        $user_questions=$questions->count();
        $accepted_answers=Answer::where('user_id',$id)->where('accepted',1)->get()->count();

        $user_answers=Answer::where('user_id',$id)->get()->count();
        $count=0;  
        foreach ($user->answers as $key => $value) {
             $count+=  $value->answerComments->count();
           }
           foreach ($user->qustions as $key => $value) {
              $count+= $value->question_comment->count();
           }
        return view('front.user_profile',['coments'=>$count,'user'=>$user,'questions'=>$user_questions,'answers'=>$user_answers,'bestAnswers'=>$accepted_answers]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {


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
    return "nothing";
    }
    public function update1()
    {
    return "nothing";
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
    public function useranswer(){
        return view('front.user_answers');
    }
    public function editprof(){
        return view('front.edit_profile');
    }
    public function contactus(){

        return view('front.contact_us');
    }



    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : str_random(25);

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }

 public function editUser(Request $request){

    $error='';
    if(true){
    $firstName=$request->input('FirstName');
    $LastName=$request->input('LastName');
    $email=$request->input('Email');
    $webSite=$request->input('Location');
    $password=$request->input('Password');
    // $rePassword=$$request->input('rePassword');
    $country=$request->input('Cuntry');
    // $image=$request->file('Image');
    $aboutMe=$request->input('AboutMe');
    $facebook=$request->input('Facebook');
    $tiwtter=$request->input('Twitter');
    $linkedin=$request->input('Linkedin');
    

    $user=Auth::user();
    if($firstName != '' && $firstName!=null &$LastName != '' && $LastName!=null){
    $user->name=$firstName." ".$LastName;}
    if($email!=null && $email!=""){
    $user->email=$email;}
    if($webSite!=null && $webSite!=""){
    $user->website=$webSite;}
    if($password!=null&&$password!=""&& strlen($password)>8){
    $user->password=bcrypt($password);}
    else{}
        if($aboutMe!=null && $aboutMe!=""){
        $user->aboutme=$aboutMe;}
        if($facebook!=null && $facebook!=""){
        $user->facebook=$facebook;}
        if($tiwtter!=null && $tiwtter!=""){
        $user->twitter=$tiwtter;}
        if($linkedin!=null && $linkedin!=""){
        $user->linkedin=$linkedin;}
     if( $request->file('Image')!=null &&  $request->file('Image')!=""){
       $image = $request->file('Image');
        // Make a image name based on user name and current timestamp
        $name = str_slug($user->name.'_'.time().'.'.$image->getClientOriginalExtension());
        // Define folder path
        $folder = 'images/users';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $filePath = $folder .'/'. $name;
        // Upload image
        $image->move(public_path('images/users'), $name);
        // Set user profile image path in database to filePath
        $user->image_user = $filePath;}


      $user->save();



   return redirect('/profile/'.$user->id);
    


    }
 }

}
