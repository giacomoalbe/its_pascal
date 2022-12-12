<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login() {
        return view("login");
    }

    public function register() {
        return view("register");
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }

    public function doRegister(Request $request) {
        $validatedData = $request->validate([
            "name" => "required",
            "surname" => "required",
            "email" => ["required", "email"],
            "password" => ["required", "confirmed", "min:6"]
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect("/login");
    }

    public function doLogin(Request $request) {
        $validatedData = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (Auth::attempt($validatedData)) {
           // Login success -> utente trovato
           $request->session()->regenerate();

           return redirect()->intended();
        }

        // Login fail -> utente non trovato
        return back()->withErrors([
            'login' => "Email o password non esistenti"
        ])->onlyInput("email");
    }
}
