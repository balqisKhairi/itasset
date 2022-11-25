<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Desktop;
use App\Aiodesktop;
use App\Biometric;
use App\CardReader;
use App\Encoremed;
use App\Imageviewer;
use App\Laptop;
use App\Mpos;
use App\Osdesktop;
use App\Printer;
use App\Tablet;
use App\Tvsharp;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DesktopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desktops = Desktop::all();
       // $selectedRole = Department::first()->id;
        //dd($desktops);
        return view('desktops.index',compact('desktops'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desktops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desktop = $request->all();
        
        if($request->hasFile('image')){
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $desktop["image"] = '/storage/'.$path; 
        }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $desktop['folder']='assets/'.$name;
            }
        }

        Desktop::create($desktop);
        $file->certiType=json_encode($desktop); 
   
        return redirect()->route('desktops.index')
                        ->with('success','New desktops added successfully.');
 
    }

    public function download(Request $request, $file){

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desktop  $desktop
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Desktop $desktop )
    { 
   
    $departments = DB::table('departments')->select('id')->distinct()->get()->pluck('id');
    
        return view('desktops.show1',compact('desktop'));
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
            $data= Desktop::find($id);
            return view('desktops.viewFolder',compact('data'));
        }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function edit(Desktop $desktop)
    {

        return view('desktops.edit',compact('desktop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desktop $desktop)
    {
        $desktop->update($request->all());
        
        return redirect()->route('desktops.index')
                        ->with('success','Desktop updated successfully');
   
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Desktop $desktop)
    {
        $desktop->delete();

        return redirect()->route('desktops.index')
        ->with('success','desktop deleted successfully');
    
    }

     /**TRYING IT OUT */

    public function createone(Request $request)
    {
        
        $desktop = $request->session()->get('desktop');
        return view('desktops.createone');
    }

    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeone(Request $request)
    {
        $validatedData = $request->all();
        

        
        $fileName = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $validatedData["image"] = '/storage/'.$path; 
       
        if(empty($request->get('desktop'))){
            $desktop = new Desktop();
          //  $desktop = Desktop::create($validatedData);
            $desktop->fill($validatedData);
            //Desktop::create($validatedData);
            $request->session()->put('desktop', $desktop);
        }else{
            $desktop = $request->get('desktop');
            $desktop->fill($validatedData);
            $request->session()->put('desktop', $desktop);
        }
  
        return redirect()->route('desktops.createtwo');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtwo(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createtwo',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storetwo(Request $request)
    {

        $validatedData = $request->all();
       // $validatedData = $request->validate([

           // 'deviceIPaddress' => 'numeric',
            //'deviceManufacturer' => 'required',
            //'deviceModel' => 'required',
            //'deviceSerielNumber' => 'required',
            //'warrantyDate' => 'required',
            //'monitorModel' => 'required',
            //'monitorManufacturer' => 'required',
           // 'monitorSize' => 'numeric',
            //'monitorSerielNumber' => 'required',

       // ]); 
  
        $desktop = $request->session()->get('desktop');
        $desktop -> fill($validatedData);
       
        $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.createthree');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createthree(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createthree',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storethree(Request $request)
    {
        
        $validatedData = $request->all();
        /**$validatedData = $request->validate([

            'department' => 'required',
            'deviceLocation' => 'required',
            'level' => 'required',

        ]); **/
  
        $desktop = $request->session()->get('desktop');
        //$desktop = Desktop::create($validatedData);
        $desktop -> fill($validatedData);

        $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.createfour');
    }


    public function createfour(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createfour',compact('desktop'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storefour(Request $request)
    {

        $validatedData = $request->all();
        /**$validatedData = $request->validate([

            'operatingSystem' => 'required',
            'windowVersion' => 'required',
            'msOfficeAndVersion' => 'required',

            'officeSerielKey' => 'required',
            'antivirusAndVersion' => 'required',
            
        ]); **/
  
        $desktop = $request->session()->get('desktop');
        //$desktop = Desktop::create($validatedData);
        $desktop -> fill($validatedData);
       $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.createfive');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createfive(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createfive',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storefive(Request $request)
    {

        $validatedData = $request->all();
       
        $desktop = $request->session()->get('desktop');
        //$desktop = Desktop::create($validatedData);
        $desktop -> fill($validatedData);
        $request->session()->put('desktop', $desktop);

        return redirect()->route('desktops.createsix');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsix(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createsix',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storesix(Request $request)
    {
        $validatedData = $request->all();
        /**$validatedData = $request->validate([

            'cpu' => 'required',
            'monitor' => 'required',
            'deployment' => 'required',

            
        ]); **/
  
        $desktop = $request->session()->get('desktop');
        //$desktop = Desktop::create($validatedData);
        $desktop -> fill($validatedData);
        $desktop->save();
        $request->session()->forget('desktop');
  
        return redirect()->route('desktops.index');
    }


    public function showStati(){
        $totalDesk = Desktop ::count();
        $totalOsdesk = Osdesktop ::count();
        $totalImageViewer = Imageviewer ::count();
        $totalAiodesk = Aiodesktop ::count();
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

        return view('desktops.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalTablet','totalLaptop','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos'));
}


/**public function myfolder(){
    $studdents = Certificate::where('user_id',auth()->user()->id)->get();
    return view('studdents.mycerti',compact('studdents'));
}**/
}


