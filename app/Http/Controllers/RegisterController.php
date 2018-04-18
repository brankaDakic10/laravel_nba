<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// added
use App\User;
class RegisterController extends Controller
{
    // added
    public function __construct()
    {        
                  
        $this->middleware('guest');
    }

    public function create()
    {
     return view('register.register-create');
    }
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|min:3|max:50',
            'email'=> 'required|email|unique:users',
            // confirmed
            'password' => 'required|confirmed|min:6'
            
        ]);
        // User::create(request()->all())
        $user=new User();
        $user->name=request('name');
        $user->email=request('email'); 
        $user->password=bcrypt(request('password'));
      
        $user->save();
        auth()->login($user);
        return redirect()->route('all-teams');
    }
    
}
