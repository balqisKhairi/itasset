<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Exports\PowerExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Imports\PowerImport;
use App\power;
use App\Aiopower;


use App\Imageviewer;
use App\Laptop;
use App\Mpos;
use App\Ospower;
use App\Printer;
use App\Tablet;
use App\Tvsharp;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class powerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $powers = power::all();
       // $selectedRole = Department::first()->id;
        //dd($powers);
        return view('powers.index',compact('powers'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('powers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $power = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $power["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $power['folder']='assets/'.$name;
            }
        }

        power::create($power);
        //$file->folder=json_encode($power); 
   
        return redirect()->route('powers.index')
                        ->with('success','New powers added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\power  $power
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(power $power )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('powers.show',compact('power'));
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
            $data= power::find($id);
            return view('powers.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\power  $power
     * @return \Illuminate\Http\Response
     */
    public function edit(power $power)
    {

        return view('powers.edit',compact('power'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\power  $power
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, power $power)
    {
        //$power->update($request->all());


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
            $power->update($post);
       
        
        return redirect()->route('powers.index')
                        ->with('success','power updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\power  $power
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, power $power)
    {
        $power->delete();

        return redirect()->back()
                ->with('success','power deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = power ::count();
        $totalOsdesk = Ospower ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aiopower ::count();
        $totalTablet = Tablet ::count();
        $totalLaptop = Laptop ::count();
        $totalPrinter = Printer ::count();
        $totalTvsharp = Tvsharp ::count();
        $totalpower = power ::count();
        $totalpower = power ::count();
        $totalpower = power ::count();
        $totalMpos = Mpos ::count();

       // $getJob = Studdent::where('studStatus','0')->count();
        //$notJob = Studdent::where('studStatus','1')->count();
        //$needcerti = Certificate::where('certiStatus','')->count();
        //$needjob = Job::where('jobStatus','')->count();

        return view('powers.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalTablet','totalLaptop','totalPrinter',
    'totalTvsharp','totalpower','totalpower','totalpower','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/


public function exportPower(){

    $powers=Power::orderBy('id','asc')->get();
    //dd('exportPower');
    //return Excel::download(new UsersExport, 'dekstops.xlsx');
    return (new PowerExport($powers))->download('powers.csv', \Maatwebsite\Excel\Excel::CSV);

}

public function importPower(Request $request){

    $request->validate([
        'excel_file'=>'required|mimes:xlsx'
    ]);

    /**Excel::import(new PowerImport, $request->file('excel_file'));
    return redirect()->back()->with('success', 'Data Successfully Imported!');
**/
    try {
        Excel::import(new PowerImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');

    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
         $failures = $e->failures();
         return redirect()->back()->with('excel_error', $failures);

         foreach ($failures as $failure) {
             $failure->row(); // row that went wrong
         }
    }

    //(new PowerImport)->import($file);
    
}

//view device under own department
public function myPower(){
    $powers = Power::where('department_id',auth()->user()->role_id)->get();
    return view('layouts.myPower',compact('powers'));
    }
}


