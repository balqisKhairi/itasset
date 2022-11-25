<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded =[];

    /**public function job(){
        //One to one
        return $this->belongsTo('App\Job');
    }**/

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
