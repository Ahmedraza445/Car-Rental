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
        $credentials = $request->only('username', 'password');

        // Check for a specific username and password combination
        if ($credentials['username'] == 'Admin' && $credentials['password'] == '321') {

            // Set a session variable indicating that the user is logged in
            $request->session()->put('authenticated', true);

            return redirect()->intended('/brands');
        }

        // Authentication failed
        return back()->withErrors(['username' => 'Invalid credentials']);
    }
}
