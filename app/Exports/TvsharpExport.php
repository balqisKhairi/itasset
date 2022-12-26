<?php

namespace App\Exports;

use App\User;
use App\tvsharp;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class TvsharpExport implements FromView
{

    use Exportable;

    public $tvsharps;

    private $device;
    private $category;

 

    
    public function __construct($tvsharps){
        $this->tvsharps=$tvsharps;
    }

    public function view(): View
    {
        return view('exports.tvsharps', [
            'tvsharps' => tvsharp::all()
        ]);
    }
}
