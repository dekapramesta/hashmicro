<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('login');
    }
    public function LoginAction(Request $request)
    {
        # code...
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {


            $request->session()->regenerate();
            return redirect()->intended('/fitur1');
        } else {
            return redirect()->back()->withErrors(['Email atau Password salah']);
        }
    }
}
