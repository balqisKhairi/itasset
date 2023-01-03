<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Imports\BiometricImport;


use App\Exports\BiometricExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

use App\biometric;
use App\Aiobiometric;


use App\Imageviewer;
use App\Laptop;
use App\Mpos;
use App\Osbiometric;
use App\Printer;
use App\Tablet;
use App\Tvsharp;
use App\Department;
use App\Power;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class biometricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biometrics = biometric::all();
       // $selectedRole = Department::first()->id;
        //dd($biometrics);
        return view('biometrics.index',compact('biometrics'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biometrics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biometric = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $biometric["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $biometric['folder']='assets/'.$name;
            }
        }

        biometric::create($biometric);
        //$file->folder=json_encode($biometric); 
   
        return redirect()->route('biometrics.index')
                        ->with('success','New biometrics added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\biometric  $biometric
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(biometric $biometric )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('biometrics.show',compact('biometric'));
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
            $data= biometric::find($id);
            return view('biometrics.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\biometric  $biometric
     * @return \Illuminate\Http\Response
     */
    public function edit(biometric $biometric)
    {

        return view('biometrics.edit',compact('biometric'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\biometric  $biometric
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, biometric $biometric)
    {
        //$biometric->update($request->all());


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
    
    
            'cpu'=>$request['cpu'],
            'monitor'=>$request['monitor'],
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
            $biometric->update($post);
       
        
        return redirect()->route('biometrics.index')
                        ->with('success','biometric updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\biometric  $biometric
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, biometric $biometric)
    {
        $biometric->delete();

        return redirect()->route('biometrics.index')
        ->with('success','biometric deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = biometric ::count();
        $totalOsdesk = Osbiometric ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aiobiometric ::count();
        $totalTablet = Tablet ::count();
        $totalLaptop = Laptop ::count();
        $totalPrinter = Printer ::count();
        $totalTvsharp = Tvsharp ::count();
        $totalbiometric = biometric ::count();
        $totalBiometric = Biometric ::count();
        $totalbiometric = biometric ::count();
        $totalMpos = Mpos ::count();

       // $getJob = Studdent::where('studStatus','0')->count();
        //$notJob = Studdent::where('studStatus','1')->count();
        //$needcerti = Certificate::where('certiStatus','')->count();
        //$needjob = Job::where('jobStatus','')->count();

        return view('biometrics.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalTablet','totalLaptop','totalPrinter',
    'totalTvsharp','totalbiometric','totalBiometric','totalbiometric','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/



public function exportBiometric(){

    $biometrics=Biometric::orderBy('id','asc')->get();
    //dd('exportBiometric');
    //return Excel::download(new UsersExport, 'dekstops.xlsx');
    return (new BiometricExport($biometrics))->download('biometrics.csv', \Maatwebsite\Excel\Excel::CSV);

}

public function importBiometric(Request $request){

    $request->validate([
        'excel_file'=>'required|mimes:xlsx'
    ]);

    /**Excel::import(new BiometricImport, $request->file('excel_file'));
    return redirect()->back()->with('success', 'Data Successfully Imported!');
**/
    try {
        Excel::import(new BiometricImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');

    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
         $failures = $e->failures();
         return redirect()->back()->with('excel_error', $failures);

         foreach ($failures as $failure) {
             $failure->row(); // row that went wrong
         }
    }

    //(new BiometricImport)->import($file);
    
}



}


