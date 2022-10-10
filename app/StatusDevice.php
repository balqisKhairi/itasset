<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusDevice extends Model
{
    public $table = "statusDevices";
 
     protected $fillable = [
        'category_id','deployment',
     ]
 ;
}
