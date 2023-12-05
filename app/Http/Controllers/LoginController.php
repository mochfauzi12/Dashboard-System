<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }
    function index() {
        return view('auth.login');
    }


    function store(Request $request) {
        $request->validate([

            'email'=> ['email','required'],
            'password'=> ['required','min:6'],
        ]);

        try {


            Auth::attempt($request->only(['email','password']));
            $request->session()->regenerate();
            return redirect()->route('home');

        }catch(\Exception $e){
            return redirect()->back()->with('msg', 'Problem With Login');
        }
    }
}
