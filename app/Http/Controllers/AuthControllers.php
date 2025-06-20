<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\ValidationException;


class AuthControllers extends Controller
{
    public function ShowLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
            ]);
        }

        $request->session()->regenerate();
        // dd('Login Success');

        return redirect()->route('dashboard'); // Ensure 'dashboard' route exists
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


    //decrpting password function
    public function showDecryptedPassword()
    {
        $user = User::first(); // or find specific user
        $decrypted = Crypt::decrypt($user->password);

        return "Decrypted password: " . $decrypted;
        // return response()->json(['decrypted_password' => $decrypted]);
    }
}
