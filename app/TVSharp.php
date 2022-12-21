<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tvsharp extends Model
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
