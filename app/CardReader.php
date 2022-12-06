<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardReader extends Model
{
    
    protected $guarded =[];


    public function department(){
        //One to many(inverse)
        return $this->belongsTo('App\Department');
    }
    
    public function vendor(){
        //One to many(inverse)
        return $this->belongsTo('App\Vendor');
    }
    
}
