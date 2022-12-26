<?php

namespace App\Exports;

use App\User;
use App\power;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class PowerExport implements FromView
{

    use Exportable;

    public $powers;

    private $device;
    private $category;

 

    
    public function __construct($powers){
        $this->powers=$powers;
    }

    public function view(): View
    {
        return view('exports.powers', [
            'powers' => power::all()
        ]);
    }
}
