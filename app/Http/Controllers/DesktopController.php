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

    public function createOne()
    {
        return view('desktops.createOne');
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeOne(Request $request)
    {
       // $validatedData = $request->validate([
                //'assignedTo' => 'required',
            //'deviceHostname' => 'required',
           
       // ]); 
       Desktop::create($request->all());
  
        if(empty($request->get('desktop'))){
            $desktop = new Desktop();
            $desktop->fill($validatedData);
            $request->put('desktop', $desktop);
        }else{
            $desktop = $request->get('desktop');
            $desktop->fill($validatedData);
            $request->put('desktop', $desktop);
        }
  
        return redirect()->route('desktops.createTwo');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTwo(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createTwo',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeTwo(Request $request)
    {
        Desktop::create($request->all());
  
        $desktop = $request->session()->get('desktop');
        $desktop->fill($validatedData);
        $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.createThree');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createThree(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createThree',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeThree(Request $request)
    {
        Desktop::create($request->all());
  
        $desktop = $request->get('desktop');
        $desktop->fill($validatedData);
        $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.createFour');
    }


    public function createFour(Request $request)
    {
        $product = $request->session()->get('desktop');
  
        return view('desktops.createFour',compact('desktop'));
    }
  
    /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFour(Request $request)
    {
        Desktop::create($request->all());
  
        if(empty($request->session()->get('desktop'))){
            $desktop = new Desktop();
            $desktop->fill($validatedData);
            $request->session()->put('desktop', $desktop);
        }else{
            $desktop = $request->session()->get('desktop');
            $desktop->fill($validatedData);
            $request->session()->put('desktop', $desktop);
        }
  
        return redirect()->route('desktops.createFive');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFive(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createFive',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeFive(Request $request)
    {
        Desktop::create($request->all());
  
        $desktop = $request->session()->get('desktop');
        $desktop->fill($validatedData);
        $request->session()->put('desktop', $desktop);
  
        return redirect()->route('desktops.createSix');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSix(Request $request)
    {
        $desktop = $request->session()->get('desktop');
  
        return view('desktops.createSix',compact('desktop'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeSix(Request $request)
    {
        Desktop::create($request->all());
  
        $desktop = $request->session()->get('desktop');
        $desktop->save($validatedData);
  
        $request->session()->forget('desktop');
  
        return redirect()->route('desktops.index');
    }
}


