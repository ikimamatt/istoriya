<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Cek apakah user adalah admin atau user
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard'); // Redirect ke admin dashboard
            } elseif ($user->role == 'user') {
                return redirect()->route('user.dashboard'); // Redirect ke user dashboard
            }
        }

        // Jika login gagal
        return back()->withErrors([
            'login' => 'Email atau password salah.',
        ])->withInput();
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}


    
