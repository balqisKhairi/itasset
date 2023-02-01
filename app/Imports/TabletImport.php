<?php

namespace App\Imports;
use App\Tablet;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\withHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class TabletImport implements ToModel, WithValidation
{
    use Importable;


    public function model(array $row)
    {
        return new Tablet([
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
           
           'deviceLocation'     => $row[8],

           'level'    => $row[9], 
           'operatingSystem'     => $row[10],
           'windowVersion'    => $row[11], 
           //'password' => Hash::make($row[2]),
           'msOfficeAndVersion'     => $row[12],
           'officeSerielKey'    => $row[13], 
           'antivirusAndVersion'     => $row[14],
           'domain'    => $row[15], 


           'internetConnection'     => $row[16],
           'policyRebootAndShutdown'    => $row[17], 
           //'password' => Hash::make($row[2]),
    
          // 'statusAsset'=>$row[25],
           'cpu'     => $row[25],
           'monitor'    => $row[26], 
          
           'deployment'     => $row[27],
           
         // 'vendor_id'     => $row[30],
           
        ]);
    }


    public function rules(): array
    {
        return [
            '5' => 'unique:Tablets,deviceSerielNumber',
            '6.required' => 'We need to know your e-mail address!',
            //'*.6' => 'required|unique',
            //'*.6' => ['6','unique:Tablets']
        ];
    }
}
