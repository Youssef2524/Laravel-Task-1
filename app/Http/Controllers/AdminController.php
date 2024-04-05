<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        return view('admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'email' =>['email','required'],
        //     'password' =>['required']

        // ]);
// return $request;


        $User=new User();
        $User->name=$request->name;
        $User->email=$request->email;
        $User->password=$request->password;
        $User->save();

        return redirect()->route('admin');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $User=User::all();
        return view('admin.show',compact('User'));
    }
    public function show2()
    {
        $User=User::all();
        return view('showUser',compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { 
        $User = User::findorfail($id);
        return view('admin.edit',compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id )
    { 
        $User = User::findorfail($id);
        $User->name=$request->name;
        $User->email=$request->email;
        // $User->password=$request->password;
        $User->save();
        return redirect()->route('show-user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $User = User::findorfail($id)->delete();
        return redirect()->route('show-user');
    }
}
