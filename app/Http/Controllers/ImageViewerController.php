<?php

namespace App\Http\Controllers;

use App\imageviewer;
use Illuminate\Http\Request;

class imageviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageviewers = imageviewer::all();
        //dd($desktops);
        return view('imageviewers.index',compact('imageviewers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imageviewers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        imageviewer::create($request->all());
   
        return redirect()->route('imageviewers.index')
                        ->with('success','New image viewer added successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\imageviewer  $imageviewer
     * @return \Illuminate\Http\Response
     */
    public function show(imageviewer $imageviewer)
    {
        return view('imageviewers.show',compact('imageviewer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imageviewer  $imageviewer
     * @return \Illuminate\Http\Response
     */
    public function edit(imageviewer $imageviewer)
    {
        return view('imageviewers.edit',compact('imageviewer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imageviewer  $imageviewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imageviewer $imageviewer)
    {
        $imageviewer->update($request->all());
  
        return redirect()->route('imageviewers.index')
                        ->with('success','imageviewer updated successfully');
   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imageviewer  $imageviewer
     * @return \Illuminate\Http\Response
     */
    public function destroy(imageviewer $imageviewer)
    {
        $imageviewer->delete();

        return redirect()->route('imageviewers.index')
        ->with('success','imageviewer deleted successfully');
   
    }

    /**TRYING IT OUT */

    public function createone(Request $request)
    {
        
        $imageviewer = $request->session()->get('imageviewer');
        return view('imageviewers.createone');
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
       
        if(empty($request->get('imageviewer'))){
            $imageviewer = new imageviewer();
          //  $desktop = Desktop::create($validatedData);
            $imageviewer->fill($validatedData);
            //Desktop::create($validatedData);
            $request->session()->put('imageviewer', $imageviewer);
        }else{
            $imageviewer = $request->get('imageviewer');
            $imageviewer->fill($validatedData);
            $request->session()->put('imageviewer', $imageviewer);
        }
  
        return redirect()->route('imageviewers.createtwo');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createtwo(Request $request)
    {
        $imageviewer = $request->session()->get('imageviewer');
  
        return view('imageviewers.createtwo',compact('imageviewer'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storetwo(Request $request)
    {

        $validatedData = $request->all();
        
  
        $imageviewer = $request->session()->get('imageviewer');
        $imageviewer -> fill($validatedData);
       
        $request->session()->put('imageviewer', $imageviewer);
  
        return redirect()->route('imageviewers.createthree');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createthree(Request $request)
    {
        $imageviewer = $request->session()->get('imageviewer');
  
        return view('imageviewers.createthree',compact('imageviewer'));
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
  
        $imageviewer = $request->session()->get('imageviewer');
        //$desktop = Desktop::create($validatedData);
        $imageviewer -> fill($validatedData);

        $request->session()->put('imageviewer', $imageviewer);
  
        return redirect()->route('imageviewers.createfour');
    }


    public function createfour(Request $request)
    {
        $imageviewer = $request->session()->get('imageviewer');
  
        return view('imageviewers.createfour',compact('imageviewer'));
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
      
  
        $imageviewer = $request->session()->get('imageviewer');
        //$desktop = Desktop::create($validatedData);
        $imageviewer -> fill($validatedData);
       $request->session()->put('imageviewer', $imageviewer);
  
        return redirect()->route('imageviewers.createfive');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createfive(Request $request)
    {
        $imageviewer = $request->session()->get('imageviewer');
  
        return view('imageviewers.createfive',compact('imageviewer'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storefive(Request $request)
    {

        $validatedData = $request->all();
      
        $imageviewer = $request->session()->get('imageviewer');
        //$desktop = Desktop::create($validatedData);
        $imageviewer -> fill($validatedData);
        $request->session()->put('imageviewer', $imageviewer);

        return redirect()->route('imageviewers.createsix');
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsix(Request $request)
    {
        $imageviewer = $request->session()->get('imageviewer');
  
        return view('imageviewers.createsix',compact('imageviewer'));
    }
  
    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function storesix(Request $request)
    {
        $validatedData = $request->all();
       
  
        $imageviewers = $request->session()->get('imageviewer');
        //$desktop = Desktop::create($validatedData);
        $imageviewers -> fill($validatedData);
        $imageviewers->save();
        $request->session()->forget('imageviewer');
  
        return redirect()->route('imageviewers.index');
    }
}
