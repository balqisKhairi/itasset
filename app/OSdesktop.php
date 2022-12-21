<?php

namespace App;
use App\Department;
use App\Vendor;

use Illuminate\Database\Eloquent\Model;

class Osdesktop extends Model
{
    protected $guarded =[];


    public function department(){
        //One to many(inverse)
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
