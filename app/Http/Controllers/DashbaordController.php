<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    /**
     *  Create a new controller instance.
     * 
     *  @return void
     */
    public function __construst()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     * 
     *  @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }
}
