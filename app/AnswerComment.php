<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerComment extends Model
{
    public $table = "answerComments";
    public function answer(){
        return $this->belongsTo('App\Answer');

    }
    public function user(){
        return $this->belongsTo('App\User'
        );
    }

}
