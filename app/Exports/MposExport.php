<?php

namespace App\Exports;

use App\User;
use App\mpos;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class MposExport implements FromView
{

    use Exportable;

    public $mpos;

    private $device;
    private $category;

 

    
    public function __construct($mpos){
        $this->mpos=$mpos;
    }

    public function view(): View
    {
        return view('exports.mpos', [
            'mpos' => mpos::all()
        ]);
    }
}
