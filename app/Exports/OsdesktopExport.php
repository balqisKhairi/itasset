<?php

namespace App\Exports;

use App\User;
use App\Osdesktop;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class OsdesktopExport implements FromView
{

    use Exportable;

    public $osdesktops;

    private $device;
    private $category;

 

    
    public function __construct($osdesktops){
        $this->osdesktops=$osdesktops;
    }

    public function view(): View
    {
        return view('exports.osdesktops', [
            'osdesktops' => osdesktop::all()
        ]);
    }
}
