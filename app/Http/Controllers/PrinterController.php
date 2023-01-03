<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\printer;

use App\Exports\PrinterExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Imports\PrinterImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class printerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $printers = printer::all();
       // $selectedRole = Department::first()->id;
        //dd($printers);
        return view('printers.index',compact('printers'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('printers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $printer = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $printer["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $printer['folder']='assets/'.$name;
            }
        }

        printer::create($printer);
        //$file->folder=json_encode($printer); 
   
        return redirect()->route('printers.index')
                        ->with('success','New printers added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\printer  $printer
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(printer $printer )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('printers.show',compact('printer'));
    }

    public function studView(Request $request){
        $skills = DB::table('jobs')->select('skill_id')->distinct()->get()->pluck('skill_id');
        $locations = DB::table('jobs')->select('jobLocation')->distinct()->get()->pluck('jobLocation');
        $post = Job::query();
    
     
        return view('jobs.studView', [
        'skills' => $skills,
        'locations' => $locations,
        //'jobs'=>$jobs,
        'posts' => $post->get(),
    
        ]);
        
        }


        public function viewFolder($id)
        {
            $data= printer::find($id);
            return view('printers.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function edit(printer $printer)
    {

        return view('printers.edit',compact('printer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, printer $printer)
    {
        //$printer->update($request->all());


        $post = [
        
            'assignedTo' =>$request['assignedTo'],
            'deviceHostname' =>$request['deviceHostname'],
            'deviceIPaddress' =>$request['deviceIPaddress'],
            'deviceManufacturer'=>$request['deviceManufacturer'],
            'deviceModel'=>$request['deviceModel'],
            'deviceSerielNumber'=>$request['deviceSerielNumber'],
            'warrantyDate'=>$request['warrantyDate'],
    
            
            'department_id'=>$request['department_id'],
            'deviceLocation'=>$request['deviceLocation'],
            'level'=>$request['level'],
    
           
            'internetConnection'=>$request['internetConnection'],

          
            'deployment'=>$request['deployment'],
    
            'purchaseOrder'=>$request['purchaseOrder'],
            'deliveryOrder'=>$request['deliveryOrder'],
            'noInvoice' =>$request['noInvoice'],
            'supplier'=>$request['supplier'],
            'pricePerUnit'=>$request['pricePerUnit'],
            'statusAsset'=>$request['statusAsset'],
           
            'vendor_id'=>$request['vendor_id'],
        ];
    
        if($request->hasFile('image')){
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images',$fileName,'public');
            $post["image"] = '/storage/'.$path; 
    
        }
    
    
        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $post['folder']='assets/'.$name;
            }
        }
            $printer->update($post);
       
        
        return redirect()->route('printers.index')
                        ->with('success','printer updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, printer $printer)
    {
        $printer->delete();

        return redirect()->route('printers.index')
        ->with('success','printer deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = printer ::count();
        $totalOsdesk = Osdesk ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aioprinter ::count();
        $totalprinter = printer ::count();
        $totalprinter = printer ::count();
        $totalPrinter = Printer ::count();
        $totalTvsharp = Tvsharp ::count();
        $totalCardreader = CardReader ::count();
        $totalBiometric = Biometric ::count();
        $totalEncoremed = Encoremed ::count();
        $totalMpos = Mpos ::count();

       // $getJob = Studdent::where('studStatus','0')->count();
        //$notJob = Studdent::where('studStatus','1')->count();
        //$needcerti = Certificate::where('certiStatus','')->count();
        //$needjob = Job::where('jobStatus','')->count();

        return view('printers.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalprinter','totalprinter','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/


public function exportPrinter(){

    $printers=printer::orderBy('id','asc')->get();
    //dd('exportprinter');
    //return Excel::download(new UsersExport, 'dekstops.xlsx');
    return (new PrinterExport($printers))->download('printers.csv', \Maatwebsite\Excel\Excel::CSV);

}


    public function importPrinter(Request $request){

        $request->validate([
            'excel_file'=>'required|mimes:xlsx'
        ]);

        /**Excel::import(new PrinterImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');
    **/
        try {
            Excel::import(new PrinterImport, $request->file('excel_file'));
            return redirect()->back()->with('success', 'Data Successfully Imported!');

        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            return redirect()->back()->with('excel_error', $failures);

            foreach ($failures as $failure) {
                $failure->row(); // row that went wrong
            }
        }

        //(new PrinterImport)->import($file);
        
    }
}


