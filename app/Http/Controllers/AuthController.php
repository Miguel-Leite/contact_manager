<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $username = auth()->user()->name;

            return json_encode([
                'success' => true,
                'message' => "Login efectuado com successo. Seja bem-vindo $username!",
            ]);
        } else {
            return json_encode([
                'success' => false,
                'message' => 'Login ou senha estão incorretos.',
            ]);
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('pages.index');
    }
}
