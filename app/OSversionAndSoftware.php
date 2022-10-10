<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OSversionAndSoftware extends Model
{
    //protected $guarded =[];
    public $table = "osVersionAndSoftwares";
 
     protected $fillable = [
       'category_id','operatingSystem','windowVersion','MSofficeAndVersion','antivirusAndVersion'
     ]
 ;
}
