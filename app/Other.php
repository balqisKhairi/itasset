<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
     //protected $guarded =[];
     public $table = "others";
 
     protected $fillable = [
       'category_id','domain','internetConnection','policyRebootAndShutdown',
     ]
 ;
}
