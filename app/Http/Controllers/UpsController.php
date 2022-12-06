<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\ups;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class upsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upss = ups::all();
       // $selectedRole = Department::first()->id;
        //dd($upss);
        return view('upss.index',compact('upss'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ups = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $ups["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $ups['folder']='assets/'.$name;
            }
        }

        ups::create($ups);
        //$file->folder=json_encode($ups); 
   
        return redirect()->route('upss.index')
                        ->with('success','New upss added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\ups  $ups
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ups $ups )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('upss.show',compact('ups'));
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
            $data= ups::find($id);
            return view('upss.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function edit(ups $ups)
    {

        return view('upss.edit',compact('ups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ups $ups)
    {
        //$ups->update($request->all());


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
            $ups->update($post);
       
        
        return redirect()->route('upss.index')
                        ->with('success','ups updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ups $ups)
    {
        $ups->delete();

        return redirect()->route('upss.index')
        ->with('success','ups deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = ups ::count();
        $totalOsdesk = Osups ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aioups ::count();
        $totalups = ups ::count();
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

        return view('upss.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalups','totalLaptop','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/
}


