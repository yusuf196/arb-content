<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public $table = "catagorys";

    public function posts(){
        return $this->hasMany('App\Post');

    }
    public function qustions(){
        return $this->hasMany('App\Qustion');

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    //
}
