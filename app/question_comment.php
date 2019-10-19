<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class question_comment extends Model
{
    //
   

    public function Question(){

        return $this->belongsTo('App\Qustion');
    }


    public function getCreatedAtAttribute($value)
    {
        $date = Carbon::parse($value);
        return $date->format('d-m-Y');
    }
}
