<?php

namespace App;
use App\Department;
use App\Vendor;

use Illuminate\Database\Eloquent\Model;

class Desktop extends Model
{
 protected $guarded =[];
 

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



public function users(){
    return $this->hasMany(User::class,'department_id');
     
 }


}
