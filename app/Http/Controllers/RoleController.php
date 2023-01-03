<?php

namespace App\Http\Controllers;

use App\role;
use App\Permission;
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
        $permissions=Permission::all();
        return view('roles.create',compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, role $role)
    {

        
        //role::create($request->all());
       
        $role= new Role;
        $role->roleName=$request->roleName;
        $role->save();
        $role->permissions()->sync($request->permission);
        
   
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
        $permissions=Permission::all();
        
        
        return view('roles.edit',compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$role->update($request->all());

        $role= Role::find($id);
        $role->roleName=$request->roleName;
        $role->save();
        $role->permissions()->sync($request->permission);
  
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
