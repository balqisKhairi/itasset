<?php

namespace App\Exports;

use App\User;
use App\biometric;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class BiometricExport implements FromView
{

    use Exportable;

    public $biometrics;

    private $device;
    private $category;

 

    
    public function __construct($biometrics){
        $this->biometrics=$biometrics;
    }

    public function view(): View
    {
        return view('exports.biometrics', [
            'biometrics' => biometric::all()
        ]);
    }
}
