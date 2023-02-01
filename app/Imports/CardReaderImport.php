<?php

namespace App\Imports;
use App\cardreader;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class cardreaderImport implements ToModel, WithValidation
{
    use Importable;


    public function model(array $row)
    {
        return new cardreader([
            'id'     => $row[0],
           // 'vendor_id'     => $row[1],
           // 'assignedTo'     => $row[1],
            //'deviceHostname'    => $row[2], 
            //'password' => Hash::make($row[2]),
            //'deviceIPaddress'     => $row[3],
            'deviceManufacturer'    => $row[3], 
            'deviceModel'     => $row[4],
            'deviceSerielNumber'    => $row[5], 
 
 
           // 'warrantyDate'     => $row[7],
            'deviceLocation'     => $row[8],
            'level'    => $row[9], 

            /**'cpu'     => $row[10],
            'monitor'    => $row[11], 
            'deployment'     => $row[12],
        
            'purchaseOrder'    => $row[13], 
             'deliveryOrder'     => $row[14],
           'noInvoice'    => $row[15], 
            'supplier'    => $row[16], 
            'pricePerUnit'    => $row[17], 
            'statusAsset'=>$row[18]
         **/
            
          // 'vendor_id'     => $row[30],
            
        ]);
    }


    public function rules(): array
    {
        return [
            '5' => 'unique:cardreaders,deviceSerielNumber',
            '6.required' => 'We need to know your e-mail address!',
            //'*.6' => 'required|unique',
            //'*.6' => ['6','unique:cardreaders']
        ];
    }
}
