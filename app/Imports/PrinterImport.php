<?php

namespace App\Imports;
use App\Printer;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class PrinterImport implements ToModel, WithValidation
{
    use Importable;


    public function model(array $row)
    {
        return new Printer([
            'id'     => $row[0],
           // 'vendor_id'     => $row[1],
            'assignedTo'     => $row[1],
            'deviceHostname'    => $row[2], 
            //'password' => Hash::make($row[2]),
            'deviceIPaddress'     => $row[3],
            'deviceManufacturer'    => $row[4], 
            'deviceModel'     => $row[5],
            'deviceSerielNumber'    => $row[6], 
 
 
            'warrantyDate'     => $row[7],
          
            //'department_id'    => $row[12], 
 
            'deviceLocation'     => $row[8],
 
            'level'    => $row[9], 

            'internetConnection'     => $row[10],
            'deployment'     => $row[11],
            'purchaseOrder'    => $row[12], 
 
            'deliveryOrder'     => $row[13],
            'noInvoice'    => $row[14], 
 
            'supplier'    => $row[15], 
            'pricePerUnit'    => $row[16], 
            //statusAsset=>$row[28]
            'statusAsset'     => $row[17],
            
           
           
            
          // 'vendor_id'     => $row[30],
            
        ]);
    }


    public function rules(): array
    {
        return [
            '6' => 'unique:Printers,deviceSerielNumber',
            '6.required' => 'We need to know your e-mail address!',
            //'*.6' => 'required|unique',
            //'*.6' => ['6','unique:Printers']
        ];
    }
}
