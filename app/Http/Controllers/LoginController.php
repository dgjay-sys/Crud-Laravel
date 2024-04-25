<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function showLoginForm()
    {   
        return view('login');
    }


    public function isLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $result = User::where('username', '=', $username)->first();
        if ($result) {
            if (Hash::check($request->password, $result->password)) {
                $request->session()->put('loginId', $result->user_id);
                return redirect('/dashboard');
            } else {
                return back()->with('fail', 'Password not match!');
            }
        } else {
            return back()->with('fail', 'This email is not register.');
        }
    }

    public function dashboard()
    {
        // return "Welcome to your dashabord.";
        $data = array();
        if (session()->has('loginId')) {
            $data = User::where('user_id', '=', session('loginId'))->first();
            return view('dashboard', compact('data'));
        }
    }

    public function logout()
    {
        $data = array();
        if (session()->has('loginId')) {
            session()->pull('loginId');
            return redirect('/login');
        }
    }
}
