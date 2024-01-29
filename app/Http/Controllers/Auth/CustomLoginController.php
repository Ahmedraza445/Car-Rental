<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Check for a specific username and password combination
        if ($credentials['email'] == 'Admin' && $credentials['password'] == '321') {
            // Authentication passed
            Auth::loginUsingId(1); // Assuming the user ID for 'Admin' is 1

            // Set a session variable indicating that the user is logged in
            $request->session()->put('authenticated', true);

            return redirect()->intended('/dashboard');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
