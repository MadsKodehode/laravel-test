<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Middleware
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    //Get controller
    public function index()
    {
        
        return view('dashboard');
    }
}
