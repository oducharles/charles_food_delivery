<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

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

    public static function is_manager()
    {
        $logged_in_user = "manager@food.com";
        if(Auth::User()->email === $logged_in_user)
            return true;
        return false;
    }

    public static function is_delivery_man()
    {
        $logged_user = "man1@delivery.com";
        if(Auth::User()->email === $logged_user)
            return true;
        return false;
    }

}
