<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('matric', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/preview')->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'matric' => 'Invalid matric no or password.',
        ])->onlyInput('matric');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully.');
    }
}
