<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationUser;
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
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required|min:3|max:50',
            'email'=> 'required|email|unique:users',
            // confirmed
            'password' => 'required|confirmed|min:6'
            
        ]);
        // User::create(request()->all())
        $user=new User();
        $user->name= request('name');
        $user->email= request('email'); 
        $user->password= bcrypt(request('password'));
        $user->is_verified= false;
      
        $user->save();
        // save 
        auth()->login($user);
    
          //   posalji user-u na njegov email //
     Mail::to($request->email)->send(new VerificationUser($user));
        return redirect()->route('login');
    }
    
}
