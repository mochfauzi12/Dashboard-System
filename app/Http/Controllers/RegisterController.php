<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    function __construct()
    {
        $this->middleware('guest');
    }
    function index() {
        return view('auth.register');
    }


    function store(Request $request) {
        $request->validate([
            'name' => ['required'],
            'email'=> ['email','required','unique:users'],
            'password'=> ['required','min:6','confirmed'],
        ]);

        try {
            User::create([
                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'password'=> Hash::make($request->password)
            ]);

            Auth::attempt($request->only(['email','password']));
            return redirect()->route('home')->with('msg','user has been registered');

        }catch(\Exception $e){
            return redirect()->back()->with('msg', 'user not registerd');
        }
    }
}
