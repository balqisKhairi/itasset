<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = user::all();
        //dd($students);
        return view('users.index',compact('users'));
       // return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this-> validate($request, [
            'name' => ['required',  'max:255'],
           // 'email' => [ 'email', 'max:255', 'unique:users'],
            'username' => [ 'required', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user=User::create($request->all());

        $user->roles()->sync($request->role);

        redirect()->route('users.index')
                        ->with('success','New user created successfully.');

                        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {

        
        return view('users.show',compact('user'));
    }




    public function myAcc(){
        $users = user::where('user_id',auth()->user()->id)->get();
        return view('users.myAcc',compact('users'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user= User::find($id);
        $roles = Role::all();
        
        return view('users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
             $this-> validate($request, [
            'username' => ['required',  'max:255'],
            //'email' => [ 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $user=User::where('id',$id)->update($request->except('_token','_method','role'));
        User::find($id)->roles()->sync($request->role);

  
        return redirect()->back()
                        ->with('success','user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();

       return redirect()->back()
       ->with('success','user deleted successfully');
    }

   
}