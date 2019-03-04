<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qustion extends Model
{
    public $table = "qustions";
    public function catagory(){
        return $this->belongsTo('App\Catagory');

    }
    public function user(){
        return $this->belongsTo('App\User');

    }
    public function answers(){
        return $this->hasMany('App\Answers');

    }
    public function qustion_comments(){
        return $this->hasMany('App\QustionComment');
    }
}
