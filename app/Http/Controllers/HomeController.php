<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agentt;
use App\salle;
use App\lit;

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
    {  $agent=agentt::all();
        $salle=salle::all();
        $lit=lit::all();
        return view('home',compact('agent','salle','lit'));
    }
}
