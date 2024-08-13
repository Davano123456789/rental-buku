<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function login()  {
        return view('login');
    }
    public function register()  {
        return view('register');
    }

    public function authenticating(Request $request)  {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

// cek apakah login valid
if (Auth::attempt($credentials)) {
            // cek apakah user statusnya  = active
            if(Auth::user()->status != 'active'){
                  // biar yang inactive tidak bisa  login
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                Session::flash('status','failed');
                Session::flash('message','your account is not active yet, please contact admin!');
                return redirect('/login');
            }
            // section biara tidak di tendang
            // biar yang inactive tidak bisa  login
            $request->session()->regenerate();
        // fitur berhasil login
        // jika user itu admin
        if(Auth::user()->role_id == 1){
            return redirect('dashboard');
        }
        // jika user client
        if(Auth::user()->role_id == 2){
            return redirect('profile');
        }
            // return redirect();
        }
        Session::flash('status','failed');
        Session::flash('message','login invalid');
        return redirect('/login');
    }

    public function logout(Request $request){
        Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('login');
    }

    // membuat register
    public function registerProcess(Request $request){
     $validated = $request->validate([
        'username' => 'required|unique:users|max:255',
        'password' => 'required|max:255',
        'phone' => 'max:255',
        'addres' => 'required|max:255',
        
    ]);
    // dd($validated);
    // membuat data mdimasukan ke database
    $request['password'] = Hash::make($request->password);
    $user = User::create($request->all());
    // dd($request->password);
    Session::flash('status','success');
    Session::flash('message','register success. wait admin for approve');
    return redirect('register');
    }
}
