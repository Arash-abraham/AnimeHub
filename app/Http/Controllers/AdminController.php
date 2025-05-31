<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function showLoginForm() {
        return view('admin.login');
    }
    public function login(Request $request) {
        // Handle admin login logic here
        // Validate the request, authenticate the admin, etc.

        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->isAdmin()) {
                return redirect()->intended(route('admin.dashboard.home'));
            } 
            else {
                Auth::logout();
                return back()->withErrors([
                    'email' => 'You do not have admin access.',
                ])->withInput();
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
        
        // Redirect to admin dashboard or show error
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
