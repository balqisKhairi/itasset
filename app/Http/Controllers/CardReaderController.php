<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Imports\cardreaderImport;
use App\Exports\cardreaderExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

use App\cardreader;
use App\Aiocardreader;
use App\Biometric;


use App\imageviewer;
use App\Laptop;
use App\Mpos;
use App\Oscardreader;
use App\Printer;
use App\Tablet;
use App\Tvsharp;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class cardreaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardreaders = cardreader::all();
       // $selectedRole = Department::first()->id;
        //dd($cardreaders);
        return view('cardreaders.index',compact('cardreaders'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cardreaders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cardreader = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $cardreader["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $cardreader['folder']='assets/'.$name;
            }
        }

        cardreader::create($cardreader);
        //$file->folder=json_encode($cardreader); 
   
        return redirect()->back()
                        ->with('success','New cardreaders added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\cardreader  $cardreader
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cardreader $cardreader )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('cardreaders.show',compact('cardreader'));
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
            $data= cardreader::find($id);
            return view('cardreaders.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cardreader  $cardreader
     * @return \Illuminate\Http\Response
     */
    public function edit(cardreader $cardreader)
    {

        return view('cardreaders.edit',compact('cardreader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cardreader  $cardreader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cardreader $cardreader)
    {
        //$cardreader->update($request->all());


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
            $cardreader->update($post);
       
        
        return redirect()->back()
                        ->with('success','cardreader updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cardreader  $cardreader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, cardreader $cardreader)
    {
        $cardreader->delete();

        return redirect()->back()
                ->with('success','cardreader deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = cardreader ::count();
        $totalOsdesk = Oscardreader ::count();
        $totalcardreader = cardreader ::count();
        $totalAiodesk = Aiocardreader ::count();
        $totalTablet = Tablet ::count();
        $totalLaptop = Laptop ::count();
        $totalPrinter = Printer ::count();
        $totalTvsharp = Tvsharp ::count();
        $totalcardreader = cardreader ::count();
        $totalBiometric = Biometric ::count();
        $totalcardreader = cardreader ::count();
        $totalMpos = Mpos ::count();

       // $getJob = Studdent::where('studStatus','0')->count();
        //$notJob = Studdent::where('studStatus','1')->count();
        //$needcerti = Certificate::where('certiStatus','')->count();
        //$needjob = Job::where('jobStatus','')->count();

        return view('cardreaders.showStati',compact('totalDesk','totalOsdesk','totalcardreader','totalAiodesk','totalTablet','totalLaptop','totalPrinter',
    'totalTvsharp','totalcardreader','totalBiometric','totalcardreader','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/


public function exportCardreader(){

    $cardreaders=cardreader::orderBy('id','asc')->get();
    //dd('exportcardreader');
    //return Excel::download(new UsersExport, 'dekstops.xlsx');
    return (new cardreaderExport($cardreaders))->download('cardreaders.csv', \Maatwebsite\Excel\Excel::CSV);

}


public function importCardreader(Request $request){

    $request->validate([
        'excel_file'=>'required|mimes:xlsx'
    ]);

    /**Excel::import(new cardreaderImport, $request->file('excel_file'));
    return redirect()->back()->with('success', 'Data Successfully Imported!');
**/
    try {
        Excel::import(new cardreaderImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');

    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
         $failures = $e->failures();
         return redirect()->back()->with('excel_error', $failures);

         foreach ($failures as $failure) {
             $failure->row(); // row that went wrong
         }
    }

    //(new cardreaderImport)->import($file);
    
}
    //view device under own department
    public function myCardreader(){
        $cardreaders = cardreader::where('department_id',auth()->user()->role_id)->get();
        return view('layouts.myCardreader',compact('cardreaders'));
        }
}


