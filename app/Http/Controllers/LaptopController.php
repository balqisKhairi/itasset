<?php

namespace App\Http\Controllers;

use App\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = Laptop::all();
        //dd($desktops);
        return view('laptops.index',compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laptops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Laptop::create($request->all());
   
        return redirect()->route('laptops.index')
                        ->with('success','New Laptop added successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        return view('laptops.show',compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        return view('laptops.edit',compact('laptop'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        $laptop->update($request->all());
  
        return redirect()->route('laptops.index')
                        ->with('success','laptop updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->delete();

        return redirect()->route('laptops.index')
        ->with('success','laptop deleted successfully');
   
    }

     /**TRYING IT OUT */

     public function createone(Request $request)
     {
         
         $laptop = $request->session()->get('laptop');
         return view('laptops.createone');
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
        
         if(empty($request->get('laptop'))){
             $laptop = new Laptop();
           //  $desktop = Desktop::create($validatedData);
             $laptop->fill($validatedData);
             //Desktop::create($validatedData);
             $request->session()->put('laptop', $laptop);
         }else{
             $laptop = $request->get('laptop');
             $laptop->fill($validatedData);
             $request->session()->put('laptop', $laptop);
         }
   
         return redirect()->route('laptops.createtwo');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createtwo(Request $request)
     {
         $laptop = $request->session()->get('laptop');
   
         return view('laptops.createtwo',compact('laptop'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storetwo(Request $request)
     {
 
         $validatedData = $request->all();
         
   
         $laptop = $request->session()->get('laptop');
         $laptop -> fill($validatedData);
        
         $request->session()->put('laptop', $laptop);
   
         return redirect()->route('laptops.createthree');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createthree(Request $request)
     {
         $laptop = $request->session()->get('laptop');
   
         return view('laptops.createthree',compact('laptop'));
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
   
         $laptop = $request->session()->get('laptop');
         //$desktop = Desktop::create($validatedData);
         $laptop -> fill($validatedData);
 
         $request->session()->put('laptop', $laptop);
   
         return redirect()->route('laptops.createfour');
     }
 
 
     public function createfour(Request $request)
     {
         $laptop = $request->session()->get('laptop');
   
         return view('laptops.createfour',compact('laptop'));
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
       
   
         $laptop = $request->session()->get('laptop');
         //$desktop = Desktop::create($validatedData);
         $laptop -> fill($validatedData);
        $request->session()->put('laptop', $laptop);
   
         return redirect()->route('laptops.createfive');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createfive(Request $request)
     {
         $laptop = $request->session()->get('laptop');
   
         return view('laptops.createfive',compact('laptop'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storefive(Request $request)
     {
 
         $validatedData = $request->all();
       
         $laptop = $request->session()->get('laptop');
         //$desktop = Desktop::create($validatedData);
         $laptop -> fill($validatedData);
         $request->session()->put('laptop', $laptop);
 
         return redirect()->route('laptops.createsix');
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function createsix(Request $request)
     {
         $laptop = $request->session()->get('laptop');
   
         return view('laptops.createsix',compact('laptop'));
     }
   
     /**
      * Show the step One Form for creating a new product.
      *
      * @return \Illuminate\Http\Response
      */
     public function storesix(Request $request)
     {
         $validatedData = $request->all();
        
   
         $laptops = $request->session()->get('laptop');
         //$desktop = Desktop::create($validatedData);
         $laptops -> fill($validatedData);
         $laptops->save();
         $request->session()->forget('laptop');
   
         return redirect()->route('laptops.index');
     }
}
