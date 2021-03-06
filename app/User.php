<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function posts()
    {
        return $this->hasMany('App\Post');

    }
        public
        function qustions()
        {
            return $this->hasMany('App\Qustion');

        }
    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
    public function answer_user_rate()
    {
        return $this->hasOne('App\answer_user_rate');
    }




 public function notifications(){
     return $this->hasMany('App\notification');
 }

 public function user_point(){
    return $this->belongsTo('App\user_point');
}
public function answers(){
    return $this->hasMany('App\Answer');
}
}
