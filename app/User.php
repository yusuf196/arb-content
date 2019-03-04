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
    public function qustions()
        {
            return $this->hasMany('App\Qustion');

        }

    public function answers(){

        return $this->hasMany('App\Answer');
    }

    public function answer_comments(){
        return $this->hasMany('App\AnswerComment');
    } 

    public function CATS(){
       return $this->hasMany('App\Catagory');
    }
}
