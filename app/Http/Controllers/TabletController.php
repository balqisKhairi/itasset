<?php

namespace App\Http\Controllers;

use App\Tablet;
use Illuminate\Http\Request;

class TabletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablets = Tablet::all();
        //dd($desktops);
        return view('tablets.index',compact('tablets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tablets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tablet::create($request->all());
   
        return redirect()->route('tablets.index')
                        ->with('success','New tablet added successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tablet  $tablet
     * @return \Illuminate\Http\Response
     */
    public function show(Tablet $tablet)
    {
        return view('tablets.show',compact('tablet'));                                                                                               
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tablet  $tablet
     * @return \Illuminate\Http\Response
     */
    public function edit(Tablet $tablet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tablet  $tablet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tablet $tablet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tablet  $tablet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tablet $tablet)
    {
        //
    }


     /**TRYING IT OUT */

     public function createone(Request $request)
     {
         
         $tablet = $request->session()->get('tablet');
         return view('tablets.createone');
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
        
         if(empty($request->get('tablet'))){
             $tablet = new Tablet();
           //  $desktop = Desktop::create($validatedData);
             $tablet->fill($validatedData);
             //Desktop::create($validatedData);
             $request->session()->put('tablet', $tablet);
         }else{
             $tablet = $request->get('tablet');
             $tablet->fill($validatedData);
             $request->session()->put('tablet', $tablet);
         }
   
         return redirect()->route('tablets.createtwo');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createtwo(Request $request)
     {
         $tablet = $request->session()->get('tablet');
   
         return view('tablets.createtwo',compact('tablet'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storetwo(Request $request)
     {
 
         $validatedData = $request->all();
         
   
         $tablet = $request->session()->get('tablet');
         $tablet -> fill($validatedData);
        
         $request->session()->put('tablet', $tablet);
   
         return redirect()->route('tablets.createthree');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createthree(Request $request)
     {
         $tablet = $request->session()->get('tablet');
   
         return view('tablets.createthree',compact('tablet'));
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
   
         $tablet = $request->session()->get('tablet');
         //$desktop = Desktop::create($validatedData);
         $tablet -> fill($validatedData);
 
         $request->session()->put('tablet', $tablet);
   
         return redirect()->route('tablets.createfour');
     }
 
 
     public function createfour(Request $request)
     {
         $tablet = $request->session()->get('tablet');
   
         return view('tablets.createfour',compact('tablet'));
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
       
   
         $tablet = $request->session()->get('tablet');
         //$desktop = Desktop::create($validatedData);
         $tablet -> fill($validatedData);
        $request->session()->put('tablet', $tablet);
   
         return redirect()->route('tablets.createfive');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createfive(Request $request)
     {
         $tablet = $request->session()->get('tablet');
   
         return view('tablets.createfive',compact('tablet'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storefive(Request $request)
     {
 
         $validatedData = $request->all();
       
         $tablet = $request->session()->get('tablet');
         //$desktop = Desktop::create($validatedData);
         $tablet -> fill($validatedData);
         $request->session()->put('tablet', $tablet);
 
         return redirect()->route('tablets.createsix');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createsix(Request $request)
     {
         $tablet = $request->session()->get('tablet');
   
         return view('tablets.createsix',compact('tablet'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storesix(Request $request)
     {
         $validatedData = $request->all();
        
   
         $tablets = $request->session()->get('tablet');
         //$desktop = Desktop::create($validatedData);
         $tablets -> fill($validatedData);
         $tablets->save();
         $request->session()->forget('tablet');
   
         return redirect()->route('tablets.index');
     }
}
