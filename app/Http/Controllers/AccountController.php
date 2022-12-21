<?php

namespace App\Http\Controllers;

use App\account;
use Auth;
use Illuminate\Http\Request;

class accountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $accounts = account::all();
        //dd($students);
        return view('accounts.index',compact('accounts'));
       // return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        account::create($request->all());

        $validated = $request->validate([
            'phoneNumber' => 'required|numeric|digits:10'
            ]);
   
        return redirect()->back()
                        ->with('success','New account created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(account $account)
    {

        
        return view('accounts.show',compact('account'));
    }




    public function myAcc(){
        $accounts = Account::where('user_id',auth()->user()->id)->get();
        return view('accounts.myAcc',compact('accounts'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(account $account)
    {
        return view('accounts.edit',compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, account $account)
    {
       
        $account->update($request->all());
  
        return redirect()->back()
                        ->with('success','account updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(account $account)
    {
        $account->delete();

       return redirect()->back()
       ->with('success','account deleted successfully');
    }

   
}