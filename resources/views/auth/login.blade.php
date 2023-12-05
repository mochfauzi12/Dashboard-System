@extends('layout')
@section('title') Register @endsection
@section('contents')

@if(session()->has('msg'))
<div class="alert alert-primary text-center">{{ session('msg') }}</div>

@endif
<div class="signup-form">
    <form action="{{ route('login') }}" method="post">
        @csrf

		<h2>Login Form</h2>
		<p>Please Sign with your Account</p>
		<hr>


        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>

		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>




		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="hint-text">Already have an account? <a href="#">Login here</a></div>
</div>

@endsection
