<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if(!Auth::attempt($request->only('username', 'password'))){
            return redirect('/')->with('fail', 'Incorrect email or password');
        }

        return redirect('/dashboard')->with('success', 'Login Successfuly');
    }

    function registerAdmin(Request $request)
    {
        //validate info
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        //insert data
        $user = new User();
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->save();
        return back()->with('success', 'Registration complete');
    }

    function logout(){

        Auth::logout();
        return redirect('/')->with('success', 'Logout Successfuly');
    }

}
