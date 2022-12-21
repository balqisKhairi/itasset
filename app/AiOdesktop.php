<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aiodesktop extends Model
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
    
}
