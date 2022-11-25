<?php

namespace App;
use App\Department;

use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{
 protected $guarded =[];
 //public $table = "desktops";
 
 /*protected $fillable = [
     'id','assignedTo','deviceHostname','deviceIPaddress', 
     'deviceManufacturer','deviceModel','deviceSerielNumber','warrantyDate',
     'department','deviceLocation','level','operatingSystem', 
     'windowVersion','msOfficeAndVersion','officeSerielKey','antivirusAndVersion',
     'domain','internetConnection','policyRebootAndShutdown','condition(CPU)', 
     'condition(monitor)','deployment','monitorModel','monitorManufacturer', 
     'monitorSize','monitorSerielNumber',
 ]
; */


public function department(){
    //One to many(inverse)
    return $this->belongsTo('App\Department');
}

}
