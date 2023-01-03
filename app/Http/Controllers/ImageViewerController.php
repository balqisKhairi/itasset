<?php

namespace App\Http\Controllers;

use App\imageviewer;
use Illuminate\Http\Request;

use App\Exports\ImageviewerExport;
use App\Imports\ImageviewerImport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class imageviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageviewers = imageviewer::all();
        //dd($ImageViewers);
        return view('imageviewers.index',compact('imageviewers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imageviewers.create');
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

        imageviewer::create($requestData);
        return redirect()->route('imageviewers.index')->with('success','New Os ImageViewer addes succesfully');
    }


    public function download(Request $request, $file){

        return response()->download(public_path('assets/'.$file));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\imageviewer  $imageviewer
     * @return \Illuminate\Http\Response
     */
    public function show(imageviewer $imageviewer)
    {
     return view ('imageviewers.show',compact('imageviewer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imageviewer  $imageviewer
     * @return \Illuminate\Http\Response
     */
    public function edit(imageviewer $imageviewer)
    {
        return view('imageviewers.edit',compact('imageviewer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imageviewer  $imageviewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,imageviewer $imageviewer)
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

       
        'purchaseOrder'=>$request['purchaseOrder'],
        'deliveryOrder'=>$request['deliveryOrder'],
        'invoiceNo' =>$request['invoiceNo'],
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
        $imageviewer->update($post);
   
        return redirect()->route('imageviewers.index')
                        ->with('success',' OS ImageViewer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imageviewer  $imageviewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(imageviewer $imageviewer)
    {
        $imageviewer->delete();

        return redirect()->route('imageviewers.index')
        ->with('success','imageviewer deleted successfully');
    }

    public function viewFolder($id)
    {
        $data= imageviewer::find($id);
        return view('imageviewers.viewFolder',compact('data'));
    }

    public function exportImageViewer(){

        $imageviewers=ImageViewer::orderBy('id','asc')->get();
        //dd('exportImageViewer');
        //return Excel::download(new UsersExport, 'dekstops.xlsx');
        return (new ImageviewerExport($imageviewers))->download('ImageViewers.csv', \Maatwebsite\Excel\Excel::CSV);

    }

    public function importImageviewer(Request $request){

        $request->validate([
            'excel_file'=>'required|mimes:xlsx'
        ]);
    
        /**Excel::import(new DesktopImport, $request->file('excel_file'));
        return redirect()->back()->with('success', 'Data Successfully Imported!');
    **/
        try {
            Excel::import(new ImageviewerImport, $request->file('excel_file'));
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
    
}
