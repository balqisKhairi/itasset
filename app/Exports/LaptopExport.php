<?php

namespace App\Exports;

use App\User;
use App\laptop;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class LaptopExport implements FromView
{

    use Exportable;

    public $laptops;

    private $device;
    private $category;

 

    
    public function __construct($laptops){
        $this->laptops=$laptops;
    }

    public function view(): View
    {
        return view('exports.laptops', [
            'laptops' => laptop::all()
        ]);
    }
}
