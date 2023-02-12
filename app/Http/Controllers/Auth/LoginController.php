<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    //Middleware
    public function __construct()
    {
        $this->middleware(['guest']);
    }


    //GET controller
    public function index()
    {
        return view('auth.login');
    }
    
    //POST controller
    public function signIn(Request $request)
    {

       
        //Validate request
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        //IF auth attempt fails
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        };
        
        return redirect()->route('dashboard');
    }
}
