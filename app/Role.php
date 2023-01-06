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
   

    public function department(){
        return $this->belongsTo('App\Department')
        ->withDefault([
            'department_id' => '-',
        ]);
    }

    public function permissions(){
        return $this->belongsToMany('App\Permission');
       
    }
}
