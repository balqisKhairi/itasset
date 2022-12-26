<?php

namespace App\Exports;

use App\User;
use App\encoremed;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class EncoremedExport implements FromView
{

    use Exportable;

    public $encoremeds;

    private $device;
    private $category;

 

    
    public function __construct($encoremeds){
        $this->encoremeds=$encoremeds;
    }

    public function view(): View
    {
        return view('exports.encoremeds', [
            'encoremeds' => encoremed::all()
        ]);
    }
}
