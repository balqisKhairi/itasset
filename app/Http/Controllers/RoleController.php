<?php

namespace App\Http\Controllers;

use App\role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = role::all();
        //dd($students);
        return view('roles.index',compact('roles'));
       // return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        role::create($request->all());
   
        return redirect()->route('roles.index')
                        ->with('success','role added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(role $role)
    {
        return view('roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(role $role)
    {
        return view('roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, role $role)
    {
        $role->update($request->all());
  
        return redirect()->route('roles.index')
                        ->with('success','role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')
        ->with('success','role deleted successfully');
    }


    public function theDevice(role $role){

        $laptops = $role->laptops;
        $printers = $role->printers;
        $desktops = $role->desktops;

        $osdesktops = $role->osdesktops;
        $imageviewers = $role->imageviewers;
        $aiodesktops = $role->aiodesktops;

        $tablets = $role->tablets;
        $tvsharps = $role->tvsharps;

        $cardreaders = $role->cardreaders;
        $biometrics = $role->biometrics;
        $encoremeds = $role->encoremeds;

        $powers = $role->powers;
        $mpos = $role->mpos;

         return view('roles.theDevice',compact('laptops','printers','desktops',
         'osdesktops','imageviewers','aiodesktops','tablets','tvsharps','cardreaders',
         'biometrics','encoremeds','powers','mpos'));
     
    }

}
