<?php

namespace App\Exports;

use App\User;
use App\cardReader;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\FromCollection;

class CardReaderExport implements FromView
{
    use Exportable;

    public $cardReaders;

    private $device;
    private $category;

 

    
    public function __construct($cardReaders){
        $this->cardReaders=$cardReaders;
    }

    public function view(): View
    {
        return view('exports.cardReaders', [
            'cardReaders' => cardReader::all()
        ]);
    }
}
