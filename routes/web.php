<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Answer;
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/addqustion', 'qustionController@store')->middleware('auth');

Route::post('/addqustion', 'qustionController@store')->middleware('auth');

Route::get('/view', 'qustionController@view')->middleware('auth');

//Route::get('/selcat', 'qustionController@selcata');
//Route::post('/selcat', 'qustionController@selcata');
Route::get('/useranswer', 'profileController@useranswer')->middleware('auth');

Route::get('/editprofile', 'profileController@editprof')->middleware('auth');

Route::post('/addqustion', 'qustionController@store')->middleware('auth');


Route::get('edit/{id}', 'qustionController@editqustion')->middleware('auth');
Route::post('edit/{id}', 'qustionController@editqustion')->middleware('auth');

Route::get('/qustion', 'qustionController@index')->middleware('auth');
Route::get('/view2', 'qustionController@view2')->middleware('auth');

Route::get('/blog', 'blogController@index')->middleware('auth');

// Route::get('/profile/{id}', 'profileController@index')->middleware('auth');
Route::get('/profile/{id}', 'profileController@show')->middleware('auth');

Route::get('/userqustion', 'profileController@create')->middleware('auth');

Route::get('/catChooser','qustionController@catselect')->name("catselector")->middleware('auth');

Route::get('/viewqust/{id}','qustionController@viewqust')->middleware('auth');

Route::post('/viewqust/{id}','qustionController@viewqust')->middleware('auth');
Route::get('/contactus','profileController@contactus')->middleware('auth');
Route::post('/addQuestionComment','commentController@question_comments')->middleware('auth');
Route::get('/addQuestionComment','commentController@question_comments')->middleware('auth');
Route::post('/addAnswerComment','commentController@answer_comments')->middleware('auth');
Route::get('/addAnswerComment','commentController@answer_comments')->middleware('auth');
Route::post('/imageUploader','profileController@store')->name('imageUploder');
Route::post('/upvote','answersController@upvote');
Route::post('/downvote','answersController@downvote');
Route::post('/acceptAnswer','answersController@acceptAnswer');
Route::get('/acceptAnswer/{id}','answersController@getacceptAnswer');
Route::get('/books','bookController@index');
Route::get('/adminLogin','Controller@adminLogin')->name('adminLogin')->middleware('admin');
Route::get('/getAdminData','Controller@adminData')->middleware('admin');
Route::get('/getActivites','Controller@getActivites')->middleware('admin');
Route::post('/toDoList','Controller@toDoList')->middleware('admin');
Route::get('/toDoList','Controller@toDoList')->middleware('admin');
Route::post('/toDoListDelete','Controller@toDoListDelete')->middleware('admin');
Route::post('/toDoListcheck','Controller@toDoListcheck')->middleware('admin');
Route::get('/getNotifications','notificationController@getNotifications');
Route::get('/getNotifications2','notificationController@getNotifications2');
Route::get('/getPoints','Controller@getPoints');
Route::get('/writePost','blogController@create')->middleware('auth');
Route::post('/storeBlog','blogController@store')->middleware('auth');
Route::get('/viewPost/{id}','blogController@show')->middleware('auth');
Route::get('/deletePost/{id}','blogController@destroy')->middleware('auth');
Route::get('/editPost/{id}','blogController@edit')->middleware('auth');
Route::get('editcoments/{id}', 'qustionController@editcomment')->middleware('auth');
Route::post('editcoments/{id}', 'qustionController@editcomment')->middleware('auth');
Route::post('/addPostComment/{id}','blogController@blogComment')->middleware('auth');
Route::post('/updatePost/{id}','blogController@update')->middleware('auth');
Route::get('/deletePostComment/{id}','blogController@deletePostComment')->middleware('auth');
Route::post('/updatePost/{id}','blogController@update')->middleware('auth');
Route::get('/editMyComment/{id}','commentController@editMycomment')->middleware('auth');
Route::get('/deleteMyComment/{id}','commentController@deleteMycomment')->middleware('auth');
Route::post('/editMyComment/{id}','commentController@editMycomment')->middleware('auth');
Route::get('/deleteQComment/{id}','commentController@deleteQcomment')->middleware('auth');
Route::post('/editQComment/{id}','commentController@editQcomment')->middleware('auth');
Route::get('/editQComment/{id}','commentController@editQcomment')->middleware('auth');
Route::post('/editUser','profileController@editUser')->middleware('auth');
Route::get('/getUserQuestions/{id}','qustionController@getUserQuestions')->middleware('auth');
// Route::get('/editUser','profileController@editUser')->middleware('auth');
Route::get('/test',function(){
    $posts=App\Post::find(1);
   
    return view('/front.singl_post',['posts'=>$posts]);
});
// Route::get('/test',function(){
    


//     event(new App\Events\commentAdded('yusuf'));
//     return "Event has been sent!";

// });
// Route::get('/testt',function(){

//     return view('test');
// });

Route::get('deletequstion/{id}',function ($id){
    $qust=\App\Qustion::find($id);
    foreach ( $qust->answers as $key => $value) {
        $value->answerComments()->delete();
    }
  
    $qust->answers()->delete();
   $qust->notifiction()->delete();
    $qust->question_comment()->delete();
    $qust->delete();
    return redirect('/home');

});

Route::get('deleteComment/{id}',function ($id){
    $qust=\App\Answer::find($id);
    $qust->delete();
    return redirect()->back();

});


// Route::get('/addQuestionComment','commentController@question_comments')->middleware('auth');




Route::post('/catss',function(){
    if(Request::ajax()){

        $ar = Request::input();


        for ($i=1; $i <= count($ar); $i++) {
            if($ar[$i] === "0"){continue;}
            $user=new App\UserCatagory();
            $user->catagoty_id=$i;
            $user->user_id=Auth::User()->id;
            $user->save();
        }}

});

//Route::get('/catsss', function(){
//
//  $v=new App\UserCatagory();
// return  view ("/home");
//
//});
