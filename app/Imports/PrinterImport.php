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
             //'id'     => $row[0],
           // 'vendor_id'     => $row[1],
           'assignedTo'     => $row[0],
           'deviceHostname'    => $row[1], 
           //'password' => Hash::make($row[2]),
           'deviceIPaddress'     => $row[2],
           'deviceManufacturer'    => $row[3], 
           'deviceModel'     => $row[4],
           'deviceSerielNumber'    => $row[5], 


           //'warrantyDate'     => $row[6],
           
           'deviceLocation'     => $row[8],

           'level'    => $row[9], 
          

           'internetConnection'     => $row[10],
           //'policyRebootAndShutdown'    => $row[17], 
           //'password' => Hash::make($row[2]),
    
          'statusAsset'=>$row[16],
           //'cpu'     => $row[26],
          // 'monitor'    => $row[27], 
          
           'deployment'     => $row[18],
           
         // 'vendor_id'     => $row[30],
           
            
           
           
            
          // 'vendor_id'     => $row[30],
            
        ]);
    }


    public function rules(): array
    {
        return [
            '5' => 'unique:Printers,deviceSerielNumber',
            '6.required' => 'We need to know your e-mail address!',
            //'*.6' => 'required|unique',
            //'*.6' => ['6','unique:Printers']
        ];
    }
}
