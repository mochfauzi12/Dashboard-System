<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function index() {
        return view('auth.register');
    }


    function store() {
        
    }
}
