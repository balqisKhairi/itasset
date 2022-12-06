<?php

namespace App\Http\Controllers;

use App\vendor;
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


    public function myDevice(){
        $samevendor = DB::table('vendors')
      
       // ->join('job_user', 'job_user.user_id','users.id')
        //->join('studdents', 'studdents.user_id','job_user.user_id')
        ->join('desktops', 'desktops.vendorId','vendors.id')
        //->join('osdesktops', 'osdesktops.vendorId','vendors.id')
        //->join('aiodesktops', 'aiodesktops.vendorId','vendors.id')
       /**->join('biometrics', 'biometrics.vendorId','vendors.id')
        ->join('card_readers', 'card_readers.vendorId','vendors.id')
        ->join('encoremeds', 'encoremeds.vendorId','vendors.id')
        ->join('image_viewers', 'image_viewers.vendorId','vendors.id')
        ->join('laptops', 'laptops.vendorId','vendors.id')
        ->join('mpos', 'mpos.vendorId','vendors.id')
        ->join('powers', 'powers.vendorId','vendors.id')
        ->join('osdesktops', 'osdesktops.vendorId','vendors.id')
       **/


     ->select('desktops.id','desktops.deviceHostname','desktops.deviceIPaddress','desktops.deviceSerielNumber','desktops.deviceLocation')
 
        ->get();
         return view('vendors.myDevice',compact('samevendor'));
     }


     

}
