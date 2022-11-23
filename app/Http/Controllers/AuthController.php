<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function masuk(Request $request)
    {

        $aut = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required']

            ]
        );
        if (Auth::attempt($aut)) {
            // berhasi login
            $request->session()->regenerate();
            return redirect()->intended('supplier');
        } else {
            return redirect('login')
                ->with('errors', 'Email atau Password salah!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Anda berhasil Logout');
    }
    public function formLogin()
    {
        return view('login.index');
    }
}