<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationDevice extends Model
{
    //protected $guarded =[];
    public $table = "locationDevices";
 
     protected $fillable = [
        'category_id','department','deviceLocation','level'
     ]
 ;
}
