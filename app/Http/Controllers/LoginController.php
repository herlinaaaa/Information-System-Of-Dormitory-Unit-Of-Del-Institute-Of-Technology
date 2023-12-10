<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect()->intended('dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->intended('beranda');
            }
        }

        return view('login.view_login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $kredensial = $request->only('username', 'password');

        $user = User::where('username', '=', $request->username)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {

            } else {
                return back()->with('fail', 'Password kamu salah');
            }
        } else {
            return back()->with('fail', 'Username kamu salah');
        }


        //    $kredensial = $request->only('username', 'password');

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user = Auth::user()) {
                if ($user->role == 'admin') {
                    return redirect()->intended('dashboard');
                } else if ($user->role == 'user') {
                    return redirect()->intended('beranda');
                }
            }

            // return redirect()->intended('beranda');

        }

        //    return back()->withErrors([
        //     'password' => 'Maaf email/password kamu salah'
        //    ])->onlyInput('password');

    }
    // public function beranda(){
    //     return view('user.beranda');
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}