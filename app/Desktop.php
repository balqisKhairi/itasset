<?php

namespace App;
use App\Department;
use App\Vendor;

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
    return $this->belongsTo('App\Department')
    ->withDefault([
        'department_id' => '-',
    ]);
}



public function vendor(){
    return $this->belongsTo('App\Vendor')

    ->withDefault([
        'vendor_id' => '-',
    ]);
}



}
