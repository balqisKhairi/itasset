<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceDetail extends Model
{
    //protected $guarded =[];
    public $table = "deviceDetails";
 
     protected $fillable = [
        'category_id','deviceIPaddress','deviceManufacturer','deviceModel','deviceSerielNumber','warrantyDate'
     ]
 ;
}
