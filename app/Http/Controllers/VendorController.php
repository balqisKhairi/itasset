<?php

namespace App\Http\Controllers;

use App\vendor;
use App\Desktop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = vendor::all();
        //dd($students);
        return view('vendors.index',compact('vendors'));
       // return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        vendor::create($request->all());
   

        $validated = $request->validate([
            'compPhoneNum' => 'required|numeric|digits:10'
            ]);

        
        return redirect()->route('vendors.index')
                        ->with('success','vendor added successfully.');
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(vendor $vendor)
    {
        return view('vendors.show',compact('vendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(vendor $vendor)
    {
        return view('vendors.edit',compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendor $vendor)
    {


         
        $validated = $request->validate([
            'compPhoneNum' => 'required|numeric|min:9'
            ]);
  
        $vendor->update($request->all());

    
  
        return redirect()->route('vendors.index')
                        ->with('success','vendor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendor $vendor)
    {
        $vendor->delete();

        return redirect()->route('vendors.index')
        ->with('success','vendor deleted successfully');
    }

    /**public function applicant(){
        $applicants = Desktop::has('users')->where('user_id',auth()->user()->id)->get();
        return view('jobs.applicant',compact('applicants'));
    }**/


    public function myDevice(vendor $vendor){

        $laptops = $vendor->laptops;
        $printers = $vendor->printers;
        $desktops = $vendor->desktops;

        $osdesktops = $vendor->osdesktops;
        $imageviewers = $vendor->imageviewers;
        $aiodesktops = $vendor->aiodesktops;

        $tablets = $vendor->tablets;
        $tvsharps = $vendor->tvsharps;

        $cardreaders = $vendor->cardreaders;
        $biometrics = $vendor->biometrics;
        $encoremeds = $vendor->encoremeds;

        $powers = $vendor->powers;
        $mpos = $vendor->mpos;

         return view('vendors.myDevice',compact('laptops','printers','desktops',
         'osdesktops','imageviewers','aiodesktops','tablets','tvsharps','cardreaders',
         'biometrics','encoremeds','powers','mpos'));
     
    }


}


