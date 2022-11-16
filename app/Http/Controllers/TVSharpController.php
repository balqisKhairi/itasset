<?php

namespace App\Http\Controllers;

use App\Tvsharp;
use Illuminate\Http\Request;

class TvsharpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvsharps = Tvsharp::all();
        //dd($tvsharps);
        return view('tvsharps.index',compact('tvsharps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tvsharps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tvsharp::create($request->all());
   
        return redirect()->route('tvsharps.index')
                        ->with('success','New tvsharps added successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tvsharp  $tvsharp
     * @return \Illuminate\Http\Response
     */
    public function show(Tvsharp $tvsharp)
    {
        return view('tvsharps.show',compact('tvsharp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tvsharp  $tvsharp
     * @return \Illuminate\Http\Response
     */
    public function edit(Tvsharp $tvsharp)
    {
        return view('tvsharps.edit',compact('tvsharp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tvsharp  $tvsharp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tvsharp $tvsharp)
    {
        $tvsharp->update($request->all());
  
        return redirect()->route('tvsharps.index')
                        ->with('success','TV Sharp updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tvsharp  $tvsharp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tvsharp $tvsharp)
    {
        $tvsharp->delete();

        return redirect()->route('tvsharps.index')
        ->with('success','tvsharp deleted successfully');
   
    }

     /**TRYING IT OUT */

     public function createone(Request $request)
     {
         
         $tvsharp = $request->session()->get('tvsharp');
         return view('tvsharps.createone');
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
       
        
         if(empty($request->get('tvsharp'))){
             $tvsharp = new Tvsharp();
             $tvsharp->fill($validatedData);
             $request->session()->put('tvsharp', $tvsharp);
         }else{
             $tvsharp = $request->get('tvsharp');
             $tvsharp->fill($validatedData);
             $request->session()->put('tvsharp', $tvsharp);
         }
   
         return redirect()->route('tvsharps.createtwo');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createtwo(Request $request)
     {
         $tvsharp = $request->session()->get('tvsharp');
   
         return view('tvsharps.createtwo',compact('tvsharp'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storetwo(Request $request)
     {
 
         $validatedData = $request->all();
        
   
         $tvsharp = $request->session()->get('tvsharp');
         $tvsharp -> fill($validatedData);
        
         $request->session()->put('tvsharp', $tvsharp);
   
         return redirect()->route('tvsharps.createthree');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createthree(Request $request)
     {
         $tvsharp = $request->session()->get('tvsharp');
   
         return view('tvsharps.createthree',compact('tvsharp'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storethree(Request $request)
     {
         
         $validatedData = $request->all();
        
         $tvsharp = $request->session()->get('tvsharp');
         //$tvsharp = tvsharp::create($validatedData);
         $tvsharp -> fill($validatedData);
 
         $request->session()->put('tvsharp', $tvsharp);
   
         return redirect()->route('tvsharps.createfour');
     }
 
 
     public function createfour(Request $request)
     {
         $tvsharp = $request->session()->get('tvsharp');
   
         return view('tvsharps.createfour',compact('tvsharp'));
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
        $tvsharp = $request->session()->get('tvsharp');
        //$tvsharp = tvsharp::create($validatedData);
        $tvsharp -> fill($validatedData);
        $tvsharp->save();
        $request->session()->forget('tvsharp');
  
        return redirect()->route('tvsharps.index');
     }
   
    
}
