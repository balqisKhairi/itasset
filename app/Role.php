<?php

namespace App;
use app\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded =[];

    /**public function job(){
        //One to one
        return $this->belongsTo('App\Job');
    }**/

    public function users(){
        return $this->belongsTo('App\User')
        ->withDefault([
            'user_id' => '-',
        ]);
    }

    public function department(){
        return $this->belongsTo('App\Department')
        ->withDefault([
            'department_id' => '-',
        ]);
    }
}
