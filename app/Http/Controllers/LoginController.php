<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // added
    public function __construct()
    {        
                  
        $this->middleware('guest',['except'=>'logout']);
    }

    public function create()
    {
     return view('login.login-create');
    }

    public function store(){
        if(!auth()->attempt(
            request(['email','password'])
        ))
        {
           return back()->withErrors([
               'message'=>'Bad credentals'
           ]);
        }



        return redirect()->route('all-teams');
       }
      
    
       public function logout()
       {
        auth()->logout();
 
        return redirect()->route('login');
       }



}
