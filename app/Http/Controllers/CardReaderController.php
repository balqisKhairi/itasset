<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\cardReader;
use App\AiocardReader;
use App\Biometric;


use App\Imageviewer;
use App\Laptop;
use App\Mpos;
use App\OscardReader;
use App\Printer;
use App\Tablet;
use App\Tvsharp;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class cardReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardReaders = cardReader::all();
       // $selectedRole = Department::first()->id;
        //dd($cardReaders);
        return view('cardReaders.index',compact('cardReaders'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cardReaders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cardReader = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $cardReader["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $cardReader['folder']='assets/'.$name;
            }
        }

        cardReader::create($cardReader);
        //$file->folder=json_encode($cardReader); 
   
        return redirect()->route('cardReaders.index')
                        ->with('success','New cardReaders added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\cardReader  $cardReader
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(cardReader $cardReader )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('cardReaders.show',compact('cardReader'));
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
            $data= cardReader::find($id);
            return view('cardReaders.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cardReader  $cardReader
     * @return \Illuminate\Http\Response
     */
    public function edit(cardReader $cardReader)
    {

        return view('cardReaders.edit',compact('cardReader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cardReader  $cardReader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cardReader $cardReader)
    {
        //$cardReader->update($request->all());


        $post = [
        
            'assignedTo' =>$request['assignedTo'],
            'deviceHostname' =>$request['deviceHostname'],
            'deviceIPaddress' =>$request['deviceIPaddress'],
            'deviceManufacturer'=>$request['deviceManufacturer'],
            'deviceModel'=>$request['deviceModel'],
            'deviceSerielNumber'=>$request['deviceSerielNumber'],
            'warrantyDate'=>$request['warrantyDate'],
    
          
            'department'=>$request['department'],
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
           
            'vendorId'=>$request['vendorId'],
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
            $cardReader->update($post);
       
        
        return redirect()->route('cardReaders.index')
                        ->with('success','cardReader updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cardReader  $cardReader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, cardReader $cardReader)
    {
        $cardReader->delete();

        return redirect()->route('cardReaders.index')
        ->with('success','cardReader deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = cardReader ::count();
        $totalOsdesk = OscardReader ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = AiocardReader ::count();
        $totalTablet = Tablet ::count();
        $totalLaptop = Laptop ::count();
        $totalPrinter = Printer ::count();
        $totalTvsharp = Tvsharp ::count();
        $totalCardreader = CardReader ::count();
        $totalBiometric = Biometric ::count();
        $totalcardReader = cardReader ::count();
        $totalMpos = Mpos ::count();

       // $getJob = Studdent::where('studStatus','0')->count();
        //$notJob = Studdent::where('studStatus','1')->count();
        //$needcerti = Certificate::where('certiStatus','')->count();
        //$needjob = Job::where('jobStatus','')->count();

        return view('cardReaders.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalTablet','totalLaptop','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalcardReader','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/
}


