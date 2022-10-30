<?php

namespace App\Http\Controllers;

use App\Mpos;
use Illuminate\Http\Request;

class MposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mposs = Mpos::all();
        //dd($mposs);
        return view('mposs.index',compact('mposs'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mposs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mpos::create($request->all());
   
        return redirect()->route('mposs.index')
                        ->with('success','New mposs added successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mpos  $mpos
     * @return \Illuminate\Http\Response
     */
    public function show(Mpos $mpos)
    {
        return view('mposs.show',compact('mpos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mpos  $mpos
     * @return \Illuminate\Http\Response
     */
    public function edit(Mpos $mpos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mpos  $mpos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mpos $mpos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mpos  $mpos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mpos $mpos)
    {
        //
    }



     /**TRYING IT OUT */

     public function createone(Request $request)
     {
         
         $mpos = $request->session()->get('mpos');
         return view('mposs.createone');
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
        
        
         if(empty($request->get('mpos'))){
             $mpos = new Mpos();
             $mpos->fill($validatedData);
             $request->session()->put('mpos', $mpos);
         }else{
             $mpos = $request->get('mpos');
             $mpos->fill($validatedData);
             $request->session()->put('mpos', $mpos);
         }
   
         return redirect()->route('mposs.createtwo');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createtwo(Request $request)
     {
         $mpos = $request->session()->get('mpos');
   
         return view('mposs.createtwo',compact('mpos'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storetwo(Request $request)
     {
 
         $validatedData = $request->all();
        
   
         $mpos = $request->session()->get('mpos');
         $mpos -> fill($validatedData);
        
         $request->session()->put('mpos', $mpos);
   
         return redirect()->route('mposs.createthree');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createthree(Request $request)
     {
         $mpos = $request->session()->get('mpos');
   
         return view('mposs.createthree',compact('mpos'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storethree(Request $request)
     {
         
         $validatedData = $request->all();
   
         $mpos = $request->session()->get('mpos');
         $mpos -> fill($validatedData);
 
         $request->session()->put('mpos', $mpos);
   
         return redirect()->route('mposs.createfour');
     }
 
 
     public function createfour(Request $request)
     {
         $mpos = $request->session()->get('mpos');
   
         return view('mposs.createfour',compact('mpos'));
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
         
         $mpos = $request->session()->get('mpos');
         //$mpos = mpos::create($validatedData);
         $mpos -> fill($validatedData);
        $request->session()->put('mpos', $mpos);
   
         return redirect()->route('mposs.createfive');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createfive(Request $request)
     {
         $mpos = $request->session()->get('mpos');
   
         return view('mposs.createfive',compact('mpos'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storefive(Request $request)
     {
 
         $validatedData = $request->all();
        
         $mpos = $request->session()->get('mpos');
         //$mpos = mpos::create($validatedData);
         $mpos -> fill($validatedData);
         $request->session()->put('mpos', $mpos);
 
         return redirect()->route('mposs.createsix');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createsix(Request $request)
     {
         $mpos = $request->session()->get('mpos');
   
         return view('mposs.createsix',compact('mpos'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storesix(Request $request)
     {
         $validatedData = $request->all();
         
         $mpos = $request->session()->get('mpos');
         $mpos -> fill($validatedData);
         $mpos->save();
         $request->session()->forget('mpos');
   
         return redirect()->route('mposs.index');
     }
}
