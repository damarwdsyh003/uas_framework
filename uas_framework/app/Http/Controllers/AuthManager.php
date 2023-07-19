<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function halamanlogin(){
        if(Auth::check()){
            
        }
        return view('halamanlogin');
    }

    function halamanregister(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('halamanregister');
    }

    //retrieve data from form
    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $minta = $request->only('email', 'password');
        if(Auth::attempt($minta)){
            return redirect()->intended(route('home'))->with("success", "Access Granted!");
        }
        return redirect(route('halamanlogin'))->with("error", "Login Invalid!");
    }

    function registerPost(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'no_hp' => 'required',
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
        ]);
        if(!$user){
            return redirect(route('halamanregister'))->with("error", "Registration Failed, try again!");
        }
        return redirect(route('halamanlogin'))->with("success", "Registration Success!");

    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('halamanlogin'));

    }

}