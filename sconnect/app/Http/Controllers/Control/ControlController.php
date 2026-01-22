<?php

namespace App\Http\Controllers\Control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControlController extends Controller
{
    public function index()
    {
        return view('control.index');
    }


    public function login()
    {
       return view('control.auth.login');
    }

    function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    function check( Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => "required|min:5|max:30"
        ], [
            'email.exists' => 'This email is not exists in admins table'
        ]);

        $creds = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('control.index');
        }else {
            return redirect()->route('control.login')->with('fail', 'Coordonnées incorrectes');
        }
    }
}
