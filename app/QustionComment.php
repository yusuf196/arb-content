<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QustionComment extends Model
{
    //



    public function qustion(){

        $this->belongsTo('App\Qustion');
    }

    public function user(){
        $this-> belongsTo('App\User');
    }
}
