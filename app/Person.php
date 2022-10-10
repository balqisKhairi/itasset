<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //protected $guarded =[];
    public $table = "persons";
 
     protected $fillable = [
         'categoryID','assignedTo','deviceHostname',
     ]
 ;
}
