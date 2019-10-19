<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCatagory extends Model
{
    public  $table = "userscatagories";

    public function users(){
        return $this->hasMany('App\User');

    }
    public function catagorys(){
        return $this->hasMany('App\Catagory');

    }
}
