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
    

 public function department(){
    //One to many(inverse)
    return $this->belongsTo('App\Department');
}

public function vendor(){
    //One to many(inverse)
    return $this->belongsTo('App\Vendor');
}

}
