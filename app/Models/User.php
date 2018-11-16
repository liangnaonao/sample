<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
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
    public function gravatar($size = "100"){
	return "https://iocaffcdn.phphub.org/uploads/images/201612/12/1/iq7WQc2iuW.png?imageView2/1/w/34/h/34";
    	#$hash = md5(strtolower(trim($this->attributes("email"))));
	#return "http://www.gravatar.com/avatar/$hash?s=$size";
    }
}
