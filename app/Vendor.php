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
use App\Power;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $guarded =[];


    public function desktops(){
       return $this->hasMany(Desktop::class);
        
    }

    public function laptops(){
        return $this->hasMany(Laptop::class);
    }

    public function printers(){
        return $this->hasMany(Printer::class);
    }

    public function osdesktops(){
        return $this->hasMany(Osdesktop::class);
         
     }
 
     public function aiodesktops(){
         return $this->hasMany(Aiodesktop::class);
     }
 
     public function imageviewers(){
         return $this->hasMany(Imageviewer::class);
     }

     public function tablets(){
        return $this->hasMany(Tablet::class);
         
     }
 
     public function tvsharps(){
         return $this->hasMany(TVsharp::class);
     }
 
     public function cardreaders(){
         return $this->hasMany(CardReader::class);
     }

     public function biometrics(){
        return $this->hasMany(Biometric::class);
         
     }
 
     public function encoremeds(){
         return $this->hasMany(Encoremed::class);
     }
 
     public function powers(){
         return $this->hasMany(Power::class);
     }

     public function mpos(){
        return $this->hasMany(Mpos::class);
    }

}



