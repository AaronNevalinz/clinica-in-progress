<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        // validate the data
        $fields = $request->validate([
            'fullname'=>'required',    
            'email'=>'required|email|unique:users',    
            'password'=>'required|confirmed',    
        ]);
        // store the user
        $user = User::create($fields);

        // login
        Auth::login($user);
        // redirect

        return redirect()->route('home');
    }

    // login the user
    public function login(Request $request){
        // validate the data
        $fields = $request->validate([ 
            'email'=>'required|email',    
            'password'=>'required',    
        ]);

        // try to login the user
        if(Auth::attempt($fields, $request->remember)){
            return redirect()->intended('appointment');
        }else {
            return back()->withErrors([
                'failed'=>'The provided credentials doesnt match our records.'
            ]);
        }

        // redirect
    }
    public function logout(Request $request){
        // logout the user
        Auth::logout();

        // invalidate the user
        $request->session()->invalidate();
        // regenerate csrf token
        $request->session()->regenerateToken();
        //   redirect to home
        return redirect()->route('home');
    }
}
