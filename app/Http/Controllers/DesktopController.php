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
     * Remove the specified resource from storage.
     *
     * @param  \App\Desktop  $desktop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desktop $desktop)
    {
        $desktop->delete();

        return redirect()->route('desktops.index')
        ->with('success','Desktop deleted successfully');
    
    }

 /**TRYING IT OUT */

    public function createStepOne(Request $request)
    {
        $desktop = $request->get('desktop');
  
        return view('desktops.create.step.one',compact('desktop'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'assignedTo' => 'required',
            'deviceHostname' => 'required',
           
        ]);
  
        if(empty($request->session()->get('desktop'))){
            $desktop = new Desktop();
            $desktop->fill($validatedData);
            $request->session()->put('desktop', $desktop);
        }else{
            $desktop = $request->session()->get('desktop');
            $desktop->fill($validatedData);
            $request->session()->put('desktop', $desktop);
        }
  
        return redirect()->route('desktops.create.step.two');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.create-step-two',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'deviceIPaddress' => 'required',
            'deviceManufacturer' => 'required',
            'deviceModel' => 'required',
            'deviceSerielNumber' => 'required',
            'warrantyDate' => 'required',

            'monitorModel' => 'required',
            'monitorManufacturer' => 'required',
            'monitorSize' => 'required',
            'monitorSerielNumber' => 'required',
        ]);
  
        $desktop = $request->session()->get('desktop');
        $desktop->fill($validatedData);
        $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.create.step.three');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.create-step-three',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'department' => 'required',
            'deviceLocation' => 'required',
            'level' => 'required',
            
        ]);
  
        $desktop = $request->session()->get('desktop');
        $desktop->fill($validatedData);
        $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.create.step.four');
    }


    public function createStepFour(Request $request)
    {
        $product = $request->session()->get('desktop');
  
        return view('desktops.create-step-four',compact('desktop'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepFour(Request $request)
    {
        $validatedData = $request->validate([
            'operatingSystem' => 'required|unique:products',
            'windowVersion' => 'required|numeric',
            'msOfficeAndVersion' => 'required',
            'officeSerielKey' => 'required|numeric',
            'antivirusAndVersion' => 'required',
        ]);
  
        if(empty($request->session()->get('desktop'))){
            $desktop = new Desktop();
            $desktop->fill($validatedData);
            $request->session()->put('desktop', $desktop);
        }else{
            $desktop = $request->session()->get('desktop');
            $desktop->fill($validatedData);
            $request->session()->put('desktop', $desktop);
        }
  
        return redirect()->route('desktops.create.step.five');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepFive(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.create-step-five',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepFive(Request $request)
    {
        $validatedData = $request->validate([
            'domain' => 'required',
            'internetConnection' => 'required',
            'policyRebootAndShutdown' => 'required',
        ]);
  
        $desktop = $request->session()->get('desktop');
        $desktop->fill($validatedData);
        $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.create.step.six');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepSix(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.create-step-six',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepSix(Request $request)
    {
        $validatedData = $request->validate([
            'condition(CPU)' => 'required',
            'condition(monitor) ' => 'required',
            'deployment' => 'required',
        ]);
  
        $desktop = $request->session()->get('desktop');
        $desktop->save($validatedData);
  
        $request->session()->forget('desktop');
  
        return redirect()->route('desktops.index');
    }
}


