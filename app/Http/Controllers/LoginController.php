<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function login_proses(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
    
        ]);
    
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard')->with('success','Anda Berhasil masuk!');
        }else{
            return redirect()->route('login')->with('failed','Email atau Passowrd salah');
        };
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Kamu Berhasil Logout');
    }
}
    
