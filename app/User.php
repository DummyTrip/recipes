<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    protected $appends = ['role_names'];


    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function createdRecipes() {
        return $this->hasMany('App\Recipe');
    }
    
    public function boughtRecipes() {
        return $this->belongsToMany('App\Recipe');
    }

    public function getRoleNamesAttribute()
    {
        return $this->roles->lists('role')->all();
    }

}
