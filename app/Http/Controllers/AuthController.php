<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    
    
    
    
    public function show_reg(){
        return view('signup');
    }

    public function signup(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:users',
            'password'=>'required|string|min:8'
        ]);
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect()->route('index');
    }

    public function show_signin(){
        return view('signin');
    }

    public function signin(Request $request){
        $request->validate([
            'email'=>'required|email|string',
            'password'=>'required|string'
        ]);

        if(Auth::attempt(['email'=>$request->email,
                                        'password'=>$request->password])){
            return redirect()->route('index');
        }else{
            return response('Не  верные данные');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
