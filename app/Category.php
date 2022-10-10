<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $guarded =[];
    public $table = "categories";
 
     protected $fillable = [
         'categoryID','categoryName'
     ]
 ;
    
}
