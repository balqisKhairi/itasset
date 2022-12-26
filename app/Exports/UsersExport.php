<?php

namespace App\Exports;

use App\User;
use App\Desktop;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExport implements FromView
{

    use Exportable;

    public $desktops;

    private $device;
    private $category;

 

    
    public function __construct($desktops){
        $this->desktops=$desktops;
    }

    public function view(): View
    {
        return view('exports.desktops', [
            'desktops' => Desktop::all()
        ]);
    }
}
