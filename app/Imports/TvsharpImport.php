<?php

namespace App\Imports;
use App\Tvsharp;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class TvsharpImport implements ToModel, WithValidation
{
    use Importable;


    public function model(array $row)
    {
        return new Tvsharp([
            'id'     => $row[0],
         
            'deviceManufacturer'    => $row[1], 
            'deviceModel'     => $row[2],
            'deviceSerielNumber'    => $row[3], 
            'warrantyDate'     => $row[4],

            'deviceLocation'     => $row[7],
            'level'    => $row[8], 

            'cpu'     => $row[16],
            'monitor'    => $row[17], 
           'deployment'     => $row[18],
            
           
            'purchaseOrder'    => $row[10], 
            'deliveryOrder'     => $row[11],
            //'invoiceNo'    => $row[12], 
            'supplier'    => $row[13], 
            'pricePerUnit'    => $row[14], 
            //statusAsset=>$row[28]
           
          // 'vendor_id'     => $row[30],
            
        ]);
    }


    public function rules(): array
    {
        return [
            '3' => 'unique:Tvsharps,deviceSerielNumber',
            '6.required' => 'We need to know your e-mail address!',
            //'*.6' => 'required|unique',
            //'*.6' => ['6','unique:Tvsharps']
        ];
    }
}
