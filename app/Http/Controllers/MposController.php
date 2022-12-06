<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\mpos;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class mposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mposs = mpos::all();
       // $selectedRole = Department::first()->id;
        //dd($mposs);
        return view('mposs.index',compact('mposs'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mposs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mpos = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $mpos["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $mpos['folder']='assets/'.$name;
            }
        }

        mpos::create($mpos);
        //$file->folder=json_encode($mpos); 
   
        return redirect()->route('mposs.index')
                        ->with('success','New mposs added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\mpos  $mpos
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(mpos $mpos )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('mposs.show',compact('mpos'));
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
            $data= mpos::find($id);
            return view('mposs.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mpos  $mpos
     * @return \Illuminate\Http\Response
     */
    public function edit(mpos $mpos)
    {

        return view('mposs.edit',compact('mpos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mpos  $mpos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mpos $mpos)
    {
        //$mpos->update($request->all());


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
            $mpos->update($post);
       
        
        return redirect()->route('mposs.index')
                        ->with('success','mpos updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mpos  $mpos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, mpos $mpos)
    {
        $mpos->delete();

        return redirect()->route('mposs.index')
        ->with('success','mpos deleted successfully');
    
    }

    


    public function showStati(){
        $totalDesk = mpos ::count();
        $totalOsdesk = Osdesk ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aiompos ::count();
        $totalmpos = mpos ::count();
        $totalmpos = mpos ::count();
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

        return view('mposs.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalmpos','totalmpos','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/
}


