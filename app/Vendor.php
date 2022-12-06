<?php

namespace App;
use App\Desktop;
use App\Aiodesktop;
use App\Biometric;
use App\CardReader;
use App\Encoremed;
use App\Imageviewer;
use App\Laptop;
use App\Mpos;
use App\Osdesktop;
use App\Printer;
use App\Tablet;
use App\Tvsharp;
use App\Department;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $guarded =[];


    public function desktop(){
        //return $this->belongsToMany(Desktop::class)->withTimestamps();
        return $this->belongsToMany('App\Desktop');
    }

public function osdesktop(){
    //return $this->belongsToMany(Desktop::class)->withTimestamps();
    return $this->belongsToMany('App\Osdesktop');
}



}



