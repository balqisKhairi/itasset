<?php

namespace App\Http\Controllers;

use App\imageviewer;
use Illuminate\Http\Request;

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
        //dd($desktops);
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
        return redirect()->route('imageviewers.index')->with('success','New Os desktop addes succesfully');
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
                        ->with('success',' OS Desktop updated successfully');
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


    
}
