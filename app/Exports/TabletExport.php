<?php

namespace App\Exports;

use App\User;
use App\tablet;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class TabletExport implements FromView
{

    use Exportable;

    public $tablets;

    private $device;
    private $category;

 

    
    public function __construct($tablets){
        $this->tablets=$tablets;
    }

    public function view(): View
    {
        return view('exports.tablets', [
            'tablets' => tablet::all()
        ]);
    }
}
