<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'recipt' => 'required',
            'surname' => 'required',
            'othername' => 'required',
            'matric' => 'required|unique:users,matric',
            'department' => 'required',
            'level' => 'required',
            'session' => 'required',
            'bloodgroup' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->surname . ' ' . $request->othername,
            'matric' => $request->matric,
            'department' => $request->department,
            'level' => $request->level,
            'session' => $request->session,
            'bloodgroup' => $request->bloodgroup,
            'password' => Hash::make($request->password),
        ]);

        // Auto-login after registration 
        auth()->login($user);

        // Redirect to congrat page
        return redirect('/congrat')->with('success', 'Registration successful!');
    }
}
