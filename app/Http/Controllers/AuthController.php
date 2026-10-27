<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request) {
        $credentials = $request->validate([
            "email" => "email|required",
            "password" => "required"
        ]);
        if(Auth::attempt($credentials, $request->boolean("remember"))) {
            $request->session()->regenerate();
            return redirect()->intended("/");
        }
        return back()->withErrors(["email" => "email atau password salah."])->onlyInput("email");
    }
    public function register(Request $request) {
        $credentials = $request->validate([
            "email" => ["email", "required"],
            "name" => ["string", "required", "min:5"],
            "password" => ["required", "min:8"],
        ]);

        $user = User::create($credentials);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/');
    }
}
