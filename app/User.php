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
        'name',
        'surname',
        'email',
        'password',
        'gender_id',
        'date_of_birth',
        'nationality_id',
        'mobile_number',
        'permission_level'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isManagers(){
        return $this->permission_level == 1;
    }
    
    public function isEmployees(){
        return $this->permission_level == 2;
    }

    public function isTraveler(){
        return $this->permission_level == 3;
    }



}
