<?php

namespace App\Providers;
use \App\activites;
use \App\Qustion;
use \App\User;
use \App\notification;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        Schema::defaultStringLength(191);    
        \App\User::creating(function($modle){
          $activity=new activites();
          $activity->name=$modle->name;
          $activity->title=":Registerd as new User";
          $activity->image=$modle->image_user;
          $activity->save();
           
           });
      \App\Qustion::creating(function($modle){
        $user=User::find($modle->user_id);
        $name=$user->name;
        $image=$user->image_user;
        //
        if(\App\user_point::where('user_id','=',$user->id)->first()){
          $points=\App\user_point::where('user_id','=',$user->id)->first();
          $points->points = $points->points+10;
          $points->save();
        }
       else{
        $points= new \App\user_point();
          $points->user_id=$user->id;
          $points->points =10;
          $points->save();
       }
        //

        $activity=new activites();        
        $activity->name=$name;
        $activity->title= ": asked new Qustion";
        $activity->image=$image;
        $activity->save();

      });
      \App\Answer::creating(function($modle){
        $user=User::find($modle->user_id);
        $name=$user->name;
        $image=$user->image_user;
        //
        if(\App\user_point::where('user_id','=',$user->id)->first()){
          $points=\App\user_point::where('user_id','=',$user->id)->first();
          $points->points = $points->points+25;
          $points->save();
        }
       else{
        $points= new \App\user_point();
          $points->user_id=$user->id;
          $points->points =25;
          $points->save();
       }
        //
        $activity=new activites();
        $activity->name=$name;        
        $activity->title= ":Answerd a qustion";
        $activity->image=$image;
        $activity->save();
        //
        $note= new notification();
        $note->user_id=$modle->qustion->user_id;
        $note->name=$name;
        $note->body=" أجاب على سؤالك : \n".$modle->qustion->qustion_title;
        $note->question_id=$modle->qustion->id;
        $note->save();
      });

      \App\AnswerComment::creating(function($modle){
        $user=User::find($modle->user_id);
        $name=$user->name;
        $image=$user->image_user;
        //
        if(\App\user_point::where('user_id','=',$user->id)->first()){
          $points=\App\user_point::where('user_id','=',$user->id)->first();
          $points->points = $points->points+15;
          $points->save();
        }
       else{
        $points= new \App\user_point();
          $points->user_id=$user->id;
          $points->points =15;
          $points->save();
       }
        //
        $activity=new activites();
        $activity->name=$name;        
        $activity->title=": made a comment to an Answer";
        $activity->image=$image;
        $activity->save();

        $note= new notification();
        $note->user_id=$modle->answer->user_id;
        $note->name=$name;
        $note->body=" علق على اجابتك : \n".substr($modle->comment_answer,0,30)."...";
        $note->question_id=$modle->answer->qustion->id;
        $note->save();
       
      });
      \App\question_comment::creating(function($modle){
        $user=User::find($modle->user_id);
        $name=$user->name;
        $image=$user->image_user;  
        //
        if(\App\user_point::where('user_id','=',$user->id)->first()){
          $points=\App\user_point::where('user_id','=',$user->id)->first();
          $points->points = $points->points+15;
          $points->save();
        }
       else{
        $points= new \App\user_point();
          $points->user_id=$user->id;
          $points->points =15;
          $points->save();
       }
        //
        $activity=new activites();
        $activity->name=$name;        
        $activity->title=": made a comment to a Question";
        $activity->image=$image;
        $activity->save();
        //
        $note= new notification();
        $note->user_id=$modle->Question->user_id;
        $note->name=$name;
        $note->body=" علق على سؤالك : \n".substr($modle->body,0,30)."...";
        $note->question_id=$modle->Question->id;
        $note->save();

      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
