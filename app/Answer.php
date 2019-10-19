<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $table ="answers";
    public function qustion(){
        return $this->belongsTo('App\Qustion');

    }

    public function answerComments(){
        return $this->hasMany('App\AnswerComment');

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answer_user_rate(){
        return $this->hasOne('App\Answer');
    }


}
