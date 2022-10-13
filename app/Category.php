<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $guarded =[];
    public $table = "categorys";
 
     protected $fillable = [
         'id','category_id','categoryName',
     ]
 ;
    
}
