<?php

namespace App\Http\Controllers;

use App\Aiodesktop;
use Illuminate\Http\Request;

class AiodesktopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aiodesktops = Aiodesktop::all();
        //dd($desktops);
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
        Aiodesktop::create($request->all());
   
        return redirect()->route('aiodesktops.index')
                        ->with('success','New image viewer added successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aiodesktop  $aiodesktop
     * @return \Illuminate\Http\Response
     */
    public function show(Aiodesktop $aiodesktop)
    {
        return view('aiodesktops.show',compact('aiodesktop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aiodesktop  $aiodesktop
     * @return \Illuminate\Http\Response
     */
    public function edit(Aiodesktop $aiodesktop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aiodesktop  $aiodesktop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aiodesktop $aiodesktop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aiodesktop  $aiodesktop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aiodesktop $aiodesktop)
    {
        //
    }



    /**TRYING IT OUT */

    public function createone(Request $request)
    {
        
        $aiodesktop = $request->session()->get('aiodesktop');
        return view('aiodesktops.createone');
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
       
        if(empty($request->get('aiodesktop'))){
            $aiodesktop = new Aiodesktop();
            $aiodesktop->fill($validatedData);
            $request->session()->put('aiodesktop', $aiodesktop);
        }else{
            $aiodesktop = $request->get('aiodesktop');
            $aiodesktop->fill($validatedData);
            $request->session()->put('aiodesktop', $aiodesktop);
        }
  
        return redirect()->route('aiodesktops.createtwo');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtwo(Request $request)
    {
        $aiodesktop = $request->session()->get('aiodesktop');
  
        return view('aiodesktops.createtwo',compact('aiodesktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storetwo(Request $request)
    {

        $validatedData = $request->all();
        
  
        $aiodesktop = $request->session()->get('aiodesktop');
        $aiodesktop -> fill($validatedData);
       
        $request->session()->put('aiodesktop', $aiodesktop);
  
        return redirect()->route('aiodesktops.createthree');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createthree(Request $request)
    {
        $aiodesktop = $request->session()->get('aiodesktop');
  
        return view('aiodesktops.createthree',compact('aiodesktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storethree(Request $request)
    {
        
        $validatedData = $request->all();
      
  
        $aiodesktop = $request->session()->get('aiodesktop');
        //$desktop = Desktop::create($validatedData);
        $aiodesktop -> fill($validatedData);

        $request->session()->put('aiodesktop', $aiodesktop);
  
        return redirect()->route('aiodesktops.createfour');
    }


    public function createfour(Request $request)
    {
        $aiodesktop = $request->session()->get('aiodesktop');
  
        return view('aiodesktops.createfour',compact('aiodesktop'));
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
      
  
        $aiodesktop = $request->session()->get('aiodesktop');
        $aiodesktop -> fill($validatedData);
       $request->session()->put('aiodesktop', $aiodesktop);
  
        return redirect()->route('aiodesktops.createfive');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createfive(Request $request)
    {
        $aiodesktop = $request->session()->get('aiodesktop');
  
        return view('aiodesktops.createfive',compact('aiodesktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storefive(Request $request)
    {

        $validatedData = $request->all();
      
        $aiodesktop = $request->session()->get('aiodesktop');
        $aiodesktop -> fill($validatedData);
        $request->session()->put('aiodesktop', $aiodesktop);

        return redirect()->route('aiodesktops.createsix');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsix(Request $request)
    {
        $aiodesktop = $request->session()->get('aiodesktop');
  
        return view('aiodesktops.createsix',compact('aiodesktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storesix(Request $request)
    {
        $validatedData = $request->all();
       
  
        $aiodesktop = $request->session()->get('aiodesktop');
        //$desktop = Desktop::create($validatedData);
        $aiodesktop -> fill($validatedData);
        $aiodesktop->save();
        $request->session()->forget('aiodesktop');
  
        return redirect()->route('aiodesktops.index');
    }

}
