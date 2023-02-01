<?php

namespace App\Imports;
use App\Mpos;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class MposImport implements ToModel, WithValidation
{
    use Importable;


    public function model(array $row)
    {
        return new Mpos([
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
            /**'monitorModel'    => $row[8], 
            //'password' => Hash::make($row[2]),
            'monitorManufacturer'     => $row[9],
            'monitorSize'    => $row[10], 
            'monitorSerielNumber'     => $row[11],
            //'department_id'    => $row[12], */
 
            'deviceLocation'     => $row[9],
 
            'level'    => $row[10], 
            'operatingSystem'     => $row[11],
            'windowVersion'    => $row[12], 
            //'password' => Hash::make($row[2]),
            'msOfficeAndVersion'     => $row[13],
            'officeSerielKey'    => $row[14], 
            'antivirusAndVersion'     => $row[15],
            'domain'    => $row[16], 
 
 
            'internetConnection'     => $row[17],
            'policyRebootAndShutdown'    => $row[18], 
            //'password' => Hash::make($row[2]),
           
            //'purchaseOrder'    => $row[23], 
 
            //'deliveryOrder'     => $row[24],
            //'invoiceNo'    => $row[25], 
 
           // 'supplier'    => $row[26], 
            //'pricePerUnit'    => $row[27], 
            //statusAsset=>$row[28]
            'cpu'     => $row[19],
            'monitor'    => $row[20], 
           
            'deployment'     => $row[21],
            
          // 'vendor_id'     => $row[30],
            
        ]);
    }


    public function rules(): array
    {
        return [
            '6' => 'unique:Mposs,deviceSerielNumber',
            '6.required' => 'We need to know your e-mail address!',
            //'*.6' => 'required|unique',
            //'*.6' => ['6','unique:Mposs']
        ];
    }
}
