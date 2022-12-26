<?php

namespace App\Exports;

use App\User;
use App\Imageviewer;
//use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class ImageviewerExport implements FromView
{

    use Exportable;

    public $imageviewers;

    private $device;
    private $category;

 

    
    public function __construct($imageviewers){
        $this->imageviewers=$imageviewers;
    }

    public function view(): View
    {
        return view('exports.imageviewers', [
            'imageviewers' => Imageviewer::all()
        ]);
    }
}
