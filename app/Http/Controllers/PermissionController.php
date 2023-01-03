<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class permissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $permissions = Permission::all();
        //dd($students);
        return view('permissions.index',compact('permissions'));
       // return view('subjects.index');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate([
          //  'permission_id' => 'required',
            //'permissionName' => 'required',
           
        //]);
  
        permission::create($request->all());
   
        return redirect()->route('permissions.index')
                        ->with('success','New permission created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        return view('permissions.show',compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(permission $permission)
    {
        return view('permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission $permission)
    {
       
  
        $permission->update($request->all());
  
        return redirect()->route('permissions.index')
                        ->with('success','permission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
        $permission->delete();

       return redirect()->route('permissions.index')
       ->with('success','permission deleted successfully');
    }
}