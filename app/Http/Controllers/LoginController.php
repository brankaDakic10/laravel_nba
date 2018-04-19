<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
               'message'=>'Bad credentals, please try again!'
               
           ]);
        }
        return redirect()->route('all-teams');
       }
      
     

       public function logout()
       {
        auth()->logout();
 
        return redirect()->route('login');
       }

   


    //    mail verification 
       public function verification($id)
       {
        $user = User::find($id);

        $user->is_verified = true;
        $user->save();
        return redirect()->route('login');
       
       }

}
