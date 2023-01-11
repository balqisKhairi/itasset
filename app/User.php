<?php

namespace App;
use app\Account;
use app\Role;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','username','role_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function account(){
        return $this->hasOne(Account::class);
    }


    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }

    public function role(){
        return $this->belongsTo('App\Role')
        ->withDefault([
            'role_id' => '-',
        ]);
    }

    public function roles(){
        return $this->belongsTo('App\Role');
    }

    public function hasPermission($name){
        return $this->role->permissions()->where('name', $name)->exists();
    }

    public function desktop(){
        return $this->belongsTo('App\Desktop')
    
        ->withDefault([
            'role_id' => '-',
        ]);
    }
}
