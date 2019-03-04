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
    public function users(){
        return $this->hasMany('App\User');
    }
    //
}
