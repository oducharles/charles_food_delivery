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
    protected $guarded = ['id',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function is_manager()
    {
        $is_a_manager = "manager@food.com";
        if(Auth::User()->email == $is_a_manager)
            return true;
        else return false;
    }

    public function is_delivery_person()
    {
        $is_delivery_man = "man1@delivery.com";
        if(Auth::User()->email == $is_delivery_man)
            return true;
        else return false;
    }
}
