<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        //dd($students);
        return view('departments.index',compact('departments'));
       // return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Department::create($request->all());
   
        return redirect()->route('departments.index')
                        ->with('success','department added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('departments.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('departments.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $department->update($request->all());
  
        return redirect()->route('departments.index')
                        ->with('success','department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()->route('departments.index')
        ->with('success','department deleted successfully');
    }


    public function theDevice(department $department){

        $laptops = $department->laptops;
        $printers = $department->printers;
        $desktops = $department->desktops;

        $osdesktops = $department->osdesktops;
        $imageviewers = $department->imageviewers;
        $aiodesktops = $department->aiodesktops;

        $tablets = $department->tablets;
        $tvsharps = $department->tvsharps;

        $cardreaders = $department->cardreaders;
        $biometrics = $department->biometrics;
        $encoremeds = $department->encoremeds;

        $powers = $department->powers;
        $mpos = $department->mpos;

         return view('departments.theDevice',compact('laptops','printers','desktops',
         'osdesktops','imageviewers','aiodesktops','tablets','tvsharps','cardreaders',
         'biometrics','encoremeds','powers','mpos'));
     
    }

}
