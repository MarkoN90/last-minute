<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        Log::debug($credentials);


        Log::debug($request->post('email'));
        Log::debug($request->post('password'));

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->withErrors(['auth' => 'Email/Password not correct']);;
        }
    }


    public function logout(Request $request) {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
