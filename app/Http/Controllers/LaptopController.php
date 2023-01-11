<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\laptop;

use App\Imports\LaptopImport;

use App\Exports\LaptopExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class laptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = laptop::all();
       // $selectedRole = Department::first()->id;
        //dd($laptops);
        return view('laptops.index',compact('laptops'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laptops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laptop = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $laptop["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $laptop['folder']='assets/'.$name;
            }
        }

        laptop::create($laptop);
        //$file->folder=json_encode($laptop); 
   
        return redirect()->route('laptops.index')
                        ->with('success','New laptops added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\laptop  $laptop
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(laptop $laptop )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('laptops.show',compact('laptop'));
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
            $data= laptop::find($id);
            return view('laptops.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(laptop $laptop)
    {

        return view('laptops.edit',compact('laptop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laptop $laptop)
    {
        //$laptop->update($request->all());


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
    
            'operatingSystem'=>$request['operatingSystem'],
            'windowVersion'=>$request['windowVersion'],
            'msOfficeAndVersion'=>$request['msOfficeAndVersion'],
            'officeSerielKey'=>$request['officeSerielKey'],
            'antivirusAndVersion'=>$request['antivirusAndVersion'],
    
            'domain'=>$request['domain'],
            'internetConnection'=>$request['internetConnection'],
            'policyRebootAndShutdown'=>$request['policyRebootAndShutdown'],
    
            'cpu'=>$request['cpu'],
            'monitor'=>$request['monitor'],
            'deployment'=>$request['deployment'],
    
            'purchaseOrder'=>$request['purchaseOrder'],
            'deliveryOrder'=>$request['deliveryOrder'],
            'invoiceNo' =>$request['invoiceNo'],
            'supplier'=>$request['supplier'],
            'pricePerUnit'=>$request['pricePerUnit'],
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
            $laptop->update($post);
       
        
        return redirect()->route('laptops.index')
                        ->with('success','laptop updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, laptop $laptop)
    {
        $laptop->delete();

        return redirect()->back()
                ->with('success','laptop deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = laptop ::count();
        $totalOsdesk = Osdesk ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aiolaptop ::count();
        $totallaptop = laptop ::count();
        $totalLaptop = Laptop ::count();
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

        return view('laptops.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totallaptop','totalLaptop','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/



public function exportLaptop(){

    $laptops=laptop::orderBy('id','asc')->get();
    //dd('exportlaptop');
    //return Excel::download(new UsersExport, 'dekstops.xlsx');
    return (new LaptopExport($laptops))->download('laptops.csv', \Maatwebsite\Excel\Excel::CSV);

}


public function importLaptop(Request $request){

    $request->validate([
        'excel_file'=>'required|mimes:xlsx'
    ]);

    /**Excel::import(new LaptopImport, $request->file('excel_file'));
    return redirect()->back()->with('success', 'Data Successfully Imported!');
**/
    try {
        Excel::import(new LaptopImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');

    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
         $failures = $e->failures();
         return redirect()->back()->with('excel_error', $failures);

         foreach ($failures as $failure) {
             $failure->row(); // row that went wrong
         }
    }

    }

    //view device under own department
    public function myLaptop(){
    $laptops = Laptop::where('department_id',auth()->user()->role_id)->get();
    return view('layouts.myLaptop',compact('laptops'));
    }
}


