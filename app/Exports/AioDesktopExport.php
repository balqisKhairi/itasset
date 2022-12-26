<?php

namespace App\Exports;

use App\User;
use App\Aiodesktop;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class AioDesktopExport implements FromView
{

    use Exportable;

    public $aiodesktops;

    private $device;
    private $category;

 

    
    public function __construct($aiodesktops){
        $this->aiodesktops=$aiodesktops;
    }

    public function view(): View
    {
        return view('exports.aiodesktops', [
            'aiodesktops' => Aiodesktop::all()
        ]);
    }
}
