<?php

namespace App\Imports;
use App\Aiodesktop;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class AiodesktopImport implements ToModel, WithValidation
{
    use Importable;


    public function model(array $row)
    {
        return new Aiodesktop([
            //'id'     => $row[0],
           // 'vendor_id'     => $row[1],
            'assignedTo'     => $row[0],
            'deviceHostname'    => $row[1], 
            //'password' => Hash::make($row[2]),
            'deviceIPaddress'     => $row[2],
            'deviceManufacturer'    => $row[3], 
            'deviceModel'     => $row[4],
            'deviceSerielNumber'    => $row[5], 
 
 
            'warrantyDate'     => $row[6],
            'monitorModel'    => $row[7], 
            //'password' => Hash::make($row[2]),
            'monitorManufacturer'     => $row[8],
            'monitorSize'    => $row[9], 
            'monitorSerielNumber'     => $row[10],
            //'department_id'    => $row[12], 
 
            'deviceLocation'     => $row[12],
 
            'level'    => $row[13], 
            'operatingSystem'     => $row[14],
            'windowVersion'    => $row[15], 
            //'password' => Hash::make($row[2]),
            'msOfficeAndVersion'     => $row[16],
            'officeSerielKey'    => $row[17], 
            'antivirusAndVersion'     => $row[18],
            'domain'    => $row[19], 
 
 
            'internetConnection'     => $row[20],
            'policyRebootAndShutdown'    => $row[21], 
            //'password' => Hash::make($row[2]),
           
            'purchaseOrder'    => $row[24], 
 
            'deliveryOrder'     => $row[25],
            'invoiceNo'    => $row[26], 
 
            'supplier'    => $row[27], 
            'pricePerUnit'    => $row[28], 
            //statusAsset=>$row[28]
            'cpu'     => $row[30],
            'monitor'    => $row[31], 
           
            'deployment'     => $row[32],
            
          // 'vendor_id'     => $row[30],
            
        ]);
    }


    public function rules(): array
    {
        return [
            '5' => 'unique:aiodesktops,deviceSerielNumber',
            '6.required' => 'We need to know your e-mail address!',
            //'*.6' => 'required|unique',
            //'*.6' => ['6','unique:desktops']
        ];
    }
}
