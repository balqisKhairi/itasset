<?php

namespace App\Http\Controllers;

use App\Osdesktop;
use Illuminate\Http\Request;

class OsdesktopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $osdesktops = Osdesktop::all();
        //dd($desktops);
        return view('osdesktops.index',compact('osdesktops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('osdesktops');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Osdesktop::create ($request->all());

        return redirect()->route('osdesktops.index')->with('success','New Os desktop addes succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OSdesktop  $oSdesktop
     * @return \Illuminate\Http\Response
     */
    public function show(OSdesktop $oSdesktop)
    {
     return view ('osdesktops.show',compact('osdesktop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OSdesktop  $oSdesktop
     * @return \Illuminate\Http\Response
     */
    public function edit(OSdesktop $oSdesktop)
    {
        return view('osdesktops.edit',compact('osdesktop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OSdesktop  $oSdesktop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OSdesktop $oSdesktop)
    {
        $osdesktop->update($request->all());
  
        return redirect()->route('osdesktops.index')
                        ->with('success',' OS Desktop updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OSdesktop  $oSdesktop
     * @return \Illuminate\Http\Response
     */
    public function destroy(OSdesktop $oSdesktop)
    {
        $request->session()->forget('osdesktop');
        return redirect()->route('osdesktops.index')
        ->with('success','Desktop deleted successfully');
    }

    public function createone(Request $request)
    {
        $osdesktop = $request->session()->get('osdesktop');
        return view('osdesktops.createone');
    }

    public function storeone(Request $request)
    {
        $validatedData= $request->all();

        if(empty($request->get('osdesktop'))){
            $osdesktop = new Osdesktop();
            $osdesktop->fill($validatedData);
            $request->session()->put('osdesktop', $osdesktop);
        }else{
            $osdesktop = $request->get('osdesktop');
            $osdesktop->fill($validatedData);
            $request->session()->put('osdesktop', $osdesktop);
        }
  
        return redirect()->route('osdesktops.createtwo');
    }

    public function createtwo(Request $request)
    {
        $osdesktop = $request->session()->get('osdesktop');
        return view('osdesktops.createtwo',compact('osdesktop'));
    }

    public function storetwo(Request $request)
    {
        $validatedData =$request->all();

        $osdesktop = $request->session()->get('osdesktop');
        $osdesktop -> fill($validatedData);
       
        $request->session()->put('osdesktop', $osdesktop);
  
        return redirect()->route('osdesktops.createthree');
    }

    public function createthree(Request $request)
    {
        $osdesktop = $request->session()->get('osdesktop');
        return view('osdesktops.createthree',compact('osdesktop'));
    }

    public function storethree(Request $request)
    {
        $validatedData= $request->all();

        $osdesktop = $request->session()->get('osdesktop');
        $osdesktop -> fill($validatedData);
       
        $request->session()->put('osdesktop', $osdesktop);
  
        return redirect()->route('osdesktops.createfour');
    }

    public function createfour(Request $request)
    {
        $osdesktop = $request->session()->get('osdesktop');
        return view('osdesktops.createfour',compact('osdesktop'));
    }

    public function storefour(Request $request)
    {
        $validatedData =$request->all();

        $osdesktop = $request->session()->get('osdesktop');
        $osdesktop -> fill($validatedData);
       
        $request->session()->put('osdesktop', $osdesktop);
  
        return redirect()->route('osdesktops.createfive');
    }

    public function createfive(Request $request)
    {
        $osdesktop = $request->session()->get('osdesktop');
        return view('osdesktops.createfive',compact('osdesktop'));
    }

    public function storefive(Request $request)
    {
        $validatedData =$request->all();

        $osdesktop = $request->session()->get('osdesktop');
        $osdesktop -> fill($validatedData);
       
        $request->session()->put('osdesktop', $osdesktop);
  
        return redirect()->route('osdesktops.createsix');
    }

    public function createsix(Request $request)
    {
        $osdesktop = $request->session()->get('osdesktop');
        return view('osdesktops.createsix',compact('osdesktop'));
    }

    public function storesix(Request $request)
    {
        $validatedData =$request->all();

        $osdesktop = $request->session()->get('osdesktop');
        $osdesktop -> fill($validatedData);
       
        $request->session()->put('osdesktop', $osdesktop);
  
        return redirect()->route('osdesktops.createseven');
    }

    public function createseven(Request $request)
    {
        $osdesktop = $request->session()->get('osdesktop');
        return view('osdesktops.createseven',compact('osdesktop'));
    }

    public function storeseven(Request $request)
    {
        $validatedData =$request->all();

        $osdesktop = $request->session()->get('osdesktop');
        $osdesktop -> fill($validatedData);
        $osdesktop->save();
        $request->session()->forget('osdesktop');
  
        return redirect()->route('osdesktops.index');
    }
}
