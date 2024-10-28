<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminLogin()
    {
        return view('admin.login');
    }
    public function AdminDashboard()
    {
        return view('admin.dashboard');
    }
    public function AdminLoginSubmit(Request $request)
    {
        // $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt( $request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email atau password salah.']);
        }


    }
    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
