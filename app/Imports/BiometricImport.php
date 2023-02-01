<?php

namespace App\Imports;
use App\Biometric;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class BiometricImport implements ToModel, WithValidation
{
    use Importable;


    public function model(array $row)
    {
        return new Biometric([
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
            'deviceLocation'     => $row[9],
            'level'    => $row[10], 

            /**'cpu'     => $row[10],
            'monitor'    => $row[11], 
            'deployment'     => $row[12],
        
            'purchaseOrder'    => $row[13], 
             'deliveryOrder'     => $row[14],
            'invoiceNo'    => $row[15], 
            'supplier'    => $row[16], 
            'pricePerUnit'    => $row[17], 
            'statusAsset'=>$row[18]
          **/
            
            
        ]);
    }


    public function rules(): array
    {
        return [
            '6' => 'unique:Biometrics,deviceSerielNumber',
            '6.required' => 'We need to know your e-mail address!',
            //'*.6' => 'required|unique',
            //'*.6' => ['6','unique:Biometrics']
        ];
    }
}
