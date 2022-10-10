<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
     //protected $guarded =[];
     public $table = "purchaseDetails";
 
     protected $fillable = [
       'category_id','taggingNo(CPU)','taggingNo(monitor)','purchaseOrder(PO)','deliveryOrder(PO)','noInvoice','supplier','pricePerUnit(RM)','statusAsset'
     ]
 ;
}
