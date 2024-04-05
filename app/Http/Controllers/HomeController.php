<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

       if(Auth::id())
       {

           $stutes=Auth()->user()->stutes;
           if($stutes==0){
            return view('home');
        }
        elseif($stutes==1)
        {
               return view('admin');

           }
        }
    
    }
    // public function admin()
    // {
    //     return view('admin');
    }

