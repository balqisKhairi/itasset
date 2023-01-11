<?php

namespace App\Http\Controllers;



use App\Exports\OsdesktopExport;
use App\Imports\OsdesktopImport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

use App\osdesktop;
use Illuminate\Http\Request;

class osdesktopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $osdesktops = Osdesktop::all();
        //dd($desktops);
        return view('osdesktops.index',compact('osdesktops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('osdesktops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        if($request->hasFile('image')){
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images',$fileName,'public');
            $requestData["image"] = '/storage/'.$path; 
              }

        if($request->hasFile('folder'))
        { 
             foreach($request->file('folder') as $file) 
             {
                $name=$file->getClientOriginalName();
                $file->move('assets',$name);
                $requestData['folder']='assets/'.$name;
            }
        }

        Osdesktop::create($requestData);
        return redirect()->route('osdesktops.index')->with('success','New Os desktop addes succesfully');
    }


    public function download(Request $request, $file){

        return response()->download(public_path('assets/'.$file));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\osdesktop  $osdesktop
     * @return \Illuminate\Http\Response
     */
    public function show(Osdesktop $osdesktop)
    {
     return view ('osdesktops.show',compact('osdesktop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\osdesktop  $osdesktop
     * @return \Illuminate\Http\Response
     */
    public function edit(osdesktop $osdesktop)
    {
        return view('osdesktops.edit',compact('osdesktop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\osdesktop  $osdesktop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Osdesktop $osdesktop)
    {
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

        'taggingcpu'=>$request['taggingcpu'],
        'taggingmonitor'=>$request['taggingmonitor'],
        'purchaseOrder'=>$request['purchaseOrder'],
        'deliveryOrder'=>$request['deliveryOrder'],
        'noInvoice' =>$request['noInvoice'],
        'supplier'=>$request['supplier'],
        'pricePerUnit'=>$request['pricePerUnit'],

        'statusAsset' =>$request['statusAsset'],
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
        $osdesktop->update($post);
   
        return redirect()->route('osdesktops.index')
                        ->with('success',' OS Desktop updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\osdesktop  $osdesktop
     * @return \Illuminate\Http\Response
     */
    public function destroy(osdesktop $osdesktop)
    {
        $osdesktop->delete();

        return redirect()->back()
                ->with('success','osdesktop deleted successfully');
    }

    public function viewFolder($id)
    {
        $data= Osdesktop::find($id);
        return view('osdesktops.viewFolder',compact('data'));
    }

    public function exportOsdesktop(){

        $osdesktops=Osdesktop::orderBy('id','asc')->get();
        //dd('exportDesktop');
        //return Excel::download(new UsersExport, 'dekstops.xlsx');
        return (new OsdesktopExport($osdesktops))->download('osdesktops.csv', \Maatwebsite\Excel\Excel::CSV);

    }
    

    public function importOsdesktop(Request $request){

        $request->validate([
            'excel_file'=>'required|mimes:xlsx'
        ]);
    
        /**Excel::import(new DesktopImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');
    **/
        try {
            Excel::import(new OsdesktopImport, $request->file('excel_file'));
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
    //view device under own department
    public function myOsdesktop(){
        $osdesktops = Osdesktop::where('department_id',auth()->user()->role_id)->get();
        return view('layouts.myOsdesktop',compact('osdesktops'));
        }
}
