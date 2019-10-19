<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer_user_rate extends Model
{
    use HasCompositePrimaryKey;
    
    protected $primaryKey = ['user_id', 'answer_id'];
    public $incrementing = false;
    public function Answer(){
        return $this->belongsTo('App\Answer');

    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
