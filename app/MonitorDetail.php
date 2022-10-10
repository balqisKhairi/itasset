<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonitorDetail extends Model
{
    public $table = "monitorDetails";
 
     protected $fillable = [
        'category_id','monitorModel','monitorManufacturer','monitorSize','monitorSerielNumber'
     ]
 ;
}
