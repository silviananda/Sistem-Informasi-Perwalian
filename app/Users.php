<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Model
{
    // use Notifiable;

protected $table = 'users';
protected $fillable = [
    'NIS', 'name', 'password' 
];

   
    // protected $fillable = [
    //     'name', 'NIS', 'nomorHp',
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
