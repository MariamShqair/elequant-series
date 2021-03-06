<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable ;
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','plan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isSubscribed($plan = null)
    {
        if($plan){
                    return $this->plan == $plan;
                }
        return !! $this->plan;
       
    }

    
    public function completions()
    {
        return $this->belongsToMany(Video::class,'completions');
    }
}
