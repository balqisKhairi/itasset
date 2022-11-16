<?php

namespace App\Http\Controllers;

use App\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $printers = Printer::all();
        //dd($printers);
        return view('printers.index',compact('printers'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('printers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        printer::create($request->all());
   
        return redirect()->route('printers.index')
                        ->with('success','New printers added successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function show(Printer $printer)
    {
        return view('printers.show',compact('printer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function edit(Printer $printer)
    {
        return view('printers.edit',compact('printer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Printer $printer)
    {
        $printer->update($request->all());
  
        return redirect()->route('printers.index')
                        ->with('success','printer updated successfully');
   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Printer $printer)
    {
        $printer->delete();

        return redirect()->route('printers.index')
        ->with('success','printer deleted successfully');
   
    }

    /**TRYING IT OUT */

    public function createone(Request $request)
    {
        
        $printer = $request->session()->get('printer');
        return view('printers.createone');
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
      
       
        if(empty($request->get('printer'))){
            $printer = new Printer();
            $printer->fill($validatedData);
            $request->session()->put('printer', $printer);
        }else{
            $printer = $request->get('printer');
            $printer->fill($validatedData);
            $request->session()->put('printer', $printer);
        }
  
        return redirect()->route('printers.createtwo');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtwo(Request $request)
    {
        $printer = $request->session()->get('printer');
  
        return view('printers.createtwo',compact('printer'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storetwo(Request $request)
    {

        $validatedData = $request->all();
       
  
        $printer = $request->session()->get('printer');
        $printer -> fill($validatedData);
       
        $request->session()->put('printer', $printer);
  
        return redirect()->route('printers.createthree');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createthree(Request $request)
    {
        $printer = $request->session()->get('printer');
  
        return view('printers.createthree',compact('printer'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storethree(Request $request)
    {
        
        $validatedData = $request->all();
       
        $printer = $request->session()->get('printer');
        //$printer = printer::create($validatedData);
        $printer -> fill($validatedData);

        $request->session()->put('printer', $printer);
  
        return redirect()->route('printers.createfour');
    }


    public function createfour(Request $request)
    {
        $printer = $request->session()->get('printer');
  
        return view('printers.createfour',compact('printer'));
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
      
  
        $printer = $request->session()->get('printer');
        //$printer = printer::create($validatedData);
        $printer -> fill($validatedData);
       $request->session()->put('printer', $printer);
  
        return redirect()->route('printers.createfive');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createfive(Request $request)
    {
        $printer = $request->session()->get('printer');
  
        return view('printers.createfive',compact('printer'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storefive(Request $request)
    {
        $validatedData = $request->all();
        $printer = $request->session()->get('printer');
        //$printer = printer::create($validatedData);
        $printer -> fill($validatedData);
        $printer->save();
        $request->session()->forget('printer');
  
        return redirect()->route('printers.index');
    }
  
   
}
