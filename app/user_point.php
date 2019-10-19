<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_point extends Model
{
   

    public function user(){
        $this->belongsTo('App\User');
    }
}
