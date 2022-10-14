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
    public function createone()
    {
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
        $validatedData = $request->validate([
                'assignedTo' => 'required',
            'deviceHostname' => 'required',
           
        ]); 
       Desktop::create($request->all());
  
        if(empty($request->get('desktop'))){
            $desktop = new Desktop();
            $desktop->fill($validatedData);
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
  
        return view('desktops.createTwo',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storetwo(Request $request)
    {
        Desktop::create($request->all());
  
        $desktop = $request->session()->get('desktop');
       
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
        Desktop::create($request->all());
  
        $desktop = $request->get('desktop');
        
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
        Desktop::create($request->all());
  
        if(empty($request->session()->get('desktop'))){
            $desktop = new Desktop();
           
            $request->session()->put('desktop', $desktop);
        }else{
            $desktop = $request->session()->get('desktop');
           
            $request->session()->put('desktop', $desktop);
        }
  
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
        Desktop::create($request->all());
  
        $desktop = $request->session()->get('desktop');
    
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
        Desktop::create($request->all());
  
        $desktop = $request->session()->get('desktop');
       
  
        $request->session()->forget('desktop');
  
        return redirect()->route('desktops.index');
    }
}


