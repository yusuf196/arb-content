<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public  $table = "posts";
    public function catagory(){
        return $this->belongsTo('App\Catagory');

    }
    public function user(){
        return $this->belongsTo('App\User');

    }
    public function postComments(){
        return $this->hasMany('App\PostComment');

    }
}
