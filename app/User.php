<?php

namespace Yblog;

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
    /**
     * The database table used by the model.
     *
     * @var string
     */
    
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    protected $fillable = [
        'id_user','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
