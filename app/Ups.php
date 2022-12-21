<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ups extends Model
{
    protected $guarded =[];


    public function department(){
        //One to many(inverse)
        return $this->belongsTo('App\Department');
    }
    
    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }
    
}
