<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    

    public function user(){

        return $this->belongsTo('App\User');
    }
    public function qustion(){

        return $this->belongsTo('App\Qustion');
    }
}
