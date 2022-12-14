<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Imports\DesktopImport;
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
use App\Power;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
Use Illuminate\Support\Facades\Input;


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
       //$desktops= Desktop::with('department','desktop')->get();
       //$desktops= Desktop::with('department','desktop')->get();
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
        //$file->folder=json_encode($desktop); 
   
        return redirect()->back()
                        ->with('success','New desktops added successfully.');
 
    }

    public function download(Request $request, $file){

        $this->authorize('create', Desktop::class);

         return response()->download(public_path('assets/'.$file));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desktop  $desktop
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show( Desktop $desktop)
    { 
        
     
        return view('desktops.show1',compact('desktop'));
       
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
        //$desktop->update($request->all());


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
            'invoiceNo' =>$request['invoiceNo'],
            'supplier'=>$request['supplier'],
            'vendor_id'=>$request['vendor_id'],
           // $trainee_id = $request->get('trainee_id');
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
            $desktop->update($post);
       
        
        return view('desktops.show1',compact('desktop'))
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

        return redirect()->back()->with('success','desktop deleted successfully');
    
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
        $totalPower = Power ::count();
        $totalVendor = Vendor ::count();
        //$totalUps = Ups ::count();

       // $getdesktop = Studdent::where('studStatus','0')->count();
        //$notdesktop = Studdent::where('studStatus','1')->count();
        //$needcerti = Certificate::where('certiStatus','')->count();
        //$needdesktop = desktop::where('desktopStatus','')->count();

        return view('layouts.showStati',compact('totalDesk','totalOsdesk','totalImageViewer','totalAiodesk','totalTablet','totalLaptop','totalPrinter',
    'totalTvsharp','totalCardreader','totalBiometric','totalEncoremed','totalMpos','totalPower','totalVendor'));
}


    public function exportDesktop(){


        $this->authorize('create', Desktop::class);
        $desktops=Desktop::orderBy('id','asc')->get();
        //dd('exportDesktop');
        //return Excel::download(new UsersExport, 'dekstops.xlsx');
        return (new UsersExport($desktops))->download('desktops.csv', \Maatwebsite\Excel\Excel::CSV);

    }


   public function importDesktop(Request $request){

    //$this->authorize('create', Desktop::class);

    $request->validate([
        'excel_file'=>'required|mimes:xlsx'
    ]);

    /**Excel::import(new DesktopImport, $request->file('excel_file'));
    return redirect()->back()->with('success', 'Data Successfully Imported!');
**/
    try {
        Excel::import(new DesktopImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');

    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
         $failures = $e->failures();
         return redirect()->back()->with('excel_error', $failures);

         foreach ($failures as $failure) {
             $failure->row(); // row that went wrong
         }
    }

    //(new DesktopImport)->import($file);
    
}


 /**public function myDesktop(desktop $desktop){
    $desktops = $desktop->users;
    //dd($desktops);
     return view('layouts.myDesktop',compact('desktops'));
 
}**/

public function myDesktop(){
    $desktops = Desktop::where('department_id',auth()->user()->role_id)->get();
    return view('layouts.myDesktop',compact('desktops'));
}


 
 
}




  


    

