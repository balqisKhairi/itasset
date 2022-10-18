<?php

namespace App\Http\Controllers;

use App\Desktop;
use Illuminate\Http\Request;


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
        Desktop::create($request->all());
   
        return redirect()->route('desktops.index')
                        ->with('success','New desktops added successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function show(Desktop $desktop)
    {
        return view('desktops.show',compact('desktop'));
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function editone(Desktop $desktop)
    {
        return view('desktops.editone',compact('desktop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function updateone(Request $request, Desktop $desktop)
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
       // $desktop->delete();
        //$desktop = $request->session()->delete();

        $request->session()->forget('desktop');
        return redirect()->route('desktops.index')
        ->with('success','Desktop deleted successfully');
    
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
        //$validatedData = $request->validate([
            //'assignedTo' => 'required',
            //'deviceHostname' => 'required',
            
        //]);
  
       
       
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
        /**$validatedData = $request->validate([

            'deviceIPaddress' => 'required',
            'deviceManufacturer' => 'required',
            'deviceModel' => 'required',
            'deviceSerielNumber' => 'required',
            'warrantyDate' => 'required',
            'monitorModel' => 'required',
            'monitorManufacturer' => 'required',
            'monitorSize' => 'required',
            'monitorSerielNumber' => 'required',

        ]); **/
  
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
       /**$validatedData = $request->validate([

            'domain' => 'required',
            'internetConnection' => 'required',
            'policyRebootAndShutdown' => 'required',

            
        ]); **/
  
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
}


