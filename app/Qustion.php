<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qustion extends Model
{
    public $table = "qustions";
    public function catagory(){
        return $this->belongsTo(Catagory::class);

    }
//    public function user(){
//        return $this->belongsTo('App\User');
//
//    }
    public function answers(){
        return $this->hasMany('App\Answer');

    }
    public function question_comment(){
        return $this->hasMany('App\question_comment','question_id');
    }

    public function user()
{
    return $this->belongsTo('App\User');
}


//    public function like()
//    {
//        return $this->belongsTo('App\Like');
//    }
 public function notifiction(){
     return $this->hasMany('App\notification','question_id');
     
 }

}
