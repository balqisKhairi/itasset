<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Exports\EncoremedExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Imports\EncoremedImport;
use App\encoremed;
use App\Aioencoremed;
use App\Biometric;
use App\CardReader;

use App\Imageviewer;
use App\Laptop;
use App\Mpos;
use App\Osencoremed;
use App\Printer;
use App\Tablet;
use App\Tvsharp;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class encoremedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encoremeds = encoremed::all();
       // $selectedRole = Department::first()->id;
        //dd($encoremeds);
        return view('encoremeds.index',compact('encoremeds'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('encoremeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encoremed = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $encoremed["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $encoremed['folder']='assets/'.$name;
            }
        }

        encoremed::create($encoremed);
        //$file->folder=json_encode($encoremed); 
   
        return redirect()->route('encoremeds.index')
                        ->with('success','New encoremeds added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\encoremed  $encoremed
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(encoremed $encoremed )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('encoremeds.show',compact('encoremed'));
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
            $data= encoremed::find($id);
            return view('encoremeds.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\encoremed  $encoremed
     * @return \Illuminate\Http\Response
     */
    public function edit(encoremed $encoremed)
    {

        return view('encoremeds.edit',compact('encoremed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\encoremed  $encoremed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, encoremed $encoremed)
    {
        //$encoremed->update($request->all());


        $post = [
        
            'assignedTo' =>$request['assignedTo'],
            'deviceHostname' =>$request['deviceHostname'],
            'deviceIPaddress' =>$request['deviceIPaddress'],
            'deviceManufacturer'=>$request['deviceManufacturer'],
            'deviceModel'=>$request['deviceModel'],
            'deviceSerielNumber'=>$request['deviceSerielNumber'],
            'warrantyDate'=>$request['warrantyDate'],
    
            'monitorModel'=>$request['monitorModel'],
            'monitorManufacturer'=>$request['monitorManufacturer'],
            'monitorSize'=>$request['monitorSize'],
            'monitorSerielNumber'=>$request['monitorSerielNumber'],
    
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
            'noInvoice' =>$request['noInvoice'],
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
            $encoremed->update($post);
       
        
        return redirect()->route('encoremeds.index')
                        ->with('success','encoremed updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\encoremed  $encoremed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, encoremed $encoremed)
    {
        $encoremed->delete();

        return redirect()->back()
                ->with('success','encoremed deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = encoremed ::count();
        $totalOsdesk = Osencoremed ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aioencoremed ::count();
        $totalTablet = Tablet ::count();
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

        return view('encoremeds.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalTablet','totalLaptop','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/

public function exportEncoremed(){

    $encoremeds=Encoremed::orderBy('id','asc')->get();
    //dd('exportEncoremed');
    //return Excel::download(new UsersExport, 'dekstops.xlsx');
    return (new EncoremedExport($encoremeds))->download('Encoremeds.csv', \Maatwebsite\Excel\Excel::CSV);

}


public function importEncoremed(Request $request){

    $request->validate([
        'excel_file'=>'required|mimes:xlsx'
    ]);

    /**Excel::import(new EncoremedImport, $request->file('excel_file'));
    return redirect()->back()->with('success', 'Data Successfully Imported!');
**/
    try {
        Excel::import(new EncoremedImport, $request->file('excel_file'));
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
    public function myEncoremed(){
        $encoremeds = Encoremed::where('department_id',auth()->user()->role_id)->get();
        return view('layouts.myEncoremed',compact('encoremeds'));
        }
}


