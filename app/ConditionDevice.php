<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConditionDevice extends Model
{
    //protected $guarded =[];
    public $table = "conditionDevices";
 
    protected $fillable = [
       'category_id','condition(CPU)','condition(monitor)']
;
}
