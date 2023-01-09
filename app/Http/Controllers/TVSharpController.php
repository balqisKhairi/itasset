<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\Exports\TvsharpExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Imports\TvsharpImport;

use App\Tvsharp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class tvsharpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvsharps = tvsharp::all();
       // $selectedRole = Department::first()->id;
        //dd($tvsharps);
        return view('tvsharps.index',compact('tvsharps'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tvsharps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tvsharp = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $tvsharp["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $tvsharp['folder']='assets/'.$name;
            }
        }

        tvsharp::create($tvsharp);
        //$file->folder=json_encode($tvsharp); 
   
        return redirect()->route('tvsharps.index')
                        ->with('success','New tvsharps added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\tvsharp  $tvsharp
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(tvsharp $tvsharp )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('tvsharps.show',compact('tvsharp'));
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
            $data= tvsharp::find($id);
            return view('tvsharps.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tvsharp  $tvsharp
     * @return \Illuminate\Http\Response
     */
    public function edit(tvsharp $tvsharp)
    {

        return view('tvsharps.edit',compact('tvsharp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tvsharp  $tvsharp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tvsharp $tvsharp)
    {
        //$tvsharp->update($request->all());


        $post = [
        
            
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
            $tvsharp->update($post);
       
        
        return redirect()->route('tvsharps.index')
                        ->with('success','tvsharp updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tvsharp  $tvsharp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, tvsharp $tvsharp)
    {
        $tvsharp->delete();

        return redirect()->route('tvsharps.index')
        ->with('success','tvsharp deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = tvsharp ::count();
        $totalOsdesk = Ostvsharp ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aiotvsharp ::count();
        $totaltvsharp = tvsharp ::count();
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

        return view('tvsharps.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totaltvsharp','totalLaptop','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/

public function exportTvsharp(){

    $tvsharps=tvsharp::orderBy('id','asc')->get();
    //dd('exporttvsharp');
    //return Excel::download(new UsersExport, 'dekstops.xlsx');
    return (new TvsharpExport($tvsharps))->download('tvsharps.csv', \Maatwebsite\Excel\Excel::CSV);

}


public function importTvsharp(Request $request){

    $request->validate([
        'excel_file'=>'required|mimes:xlsx'
    ]);

    /**Excel::import(new TvsharpImport, $request->file('excel_file'));
    return redirect()->back()->with('success', 'Data Successfully Imported!');
**/
    try {
        Excel::import(new TvsharpImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');

    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
         $failures = $e->failures();
         return redirect()->back()->with('excel_error', $failures);

         foreach ($failures as $failure) {
             $failure->row(); // row that went wrong
         }
    }

    //(new TvsharpImport)->import($file);
    
}
//view device under own department
public function myTvsharp(){
    $tvsharps = Tvsharp::where('department_id',auth()->user()->role_id)->get();
    return view('layouts.myTvsharp',compact('tvsharps'));
    }
}


