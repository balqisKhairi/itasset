<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\aiodesktop;
use App\Aioaiodesktop;
use App\Biometric;
use App\CardReader;
use App\Encoremed;
use App\Imageviewer;
use App\Laptop;
use App\Mpos;
use App\Osaiodesktop;
use App\Printer;
use App\Tablet;
use App\Tvsharp;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class aiodesktopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aiodesktops = aiodesktop::all();
       // $selectedRole = Department::first()->id;
        //dd($aiodesktops);
        return view('aiodesktops.index',compact('aiodesktops'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aiodesktops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aiodesktop = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $aiodesktop["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $aiodesktop['folder']='assets/'.$name;
            }
        }

        aiodesktop::create($aiodesktop);
        //$file->folder=json_encode($aiodesktop); 
   
        return redirect()->route('aiodesktops.index')
                        ->with('success','New aiodesktops added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\aiodesktop  $aiodesktop
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(aiodesktop $aiodesktop )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('aiodesktops.show',compact('aiodesktop'));
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
            $data= aiodesktop::find($id);
            return view('aiodesktops.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aiodesktop  $aiodesktop
     * @return \Illuminate\Http\Response
     */
    public function edit(aiodesktop $aiodesktop)
    {

        return view('aiodesktops.edit',compact('aiodesktop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aiodesktop  $aiodesktop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aiodesktop $aiodesktop)
    {
        //$aiodesktop->update($request->all());


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
            $aiodesktop->update($post);
       
        
        return redirect()->route('aiodesktops.index')
                        ->with('success','aiodesktop updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\aiodesktop  $aiodesktop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, aiodesktop $aiodesktop)
    {
        $aiodesktop->delete();

        return redirect()->route('aiodesktops.index')
        ->with('success','aiodesktop deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = aiodesktop ::count();
        $totalOsdesk = Osaiodesktop ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aioaiodesktop ::count();
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

        return view('aiodesktops.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalTablet','totalLaptop','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/
}


