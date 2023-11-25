@extends('layout')
@section('title') Home @endsection
@section('contents')

@if(session()->has('msg'))
<div class="alert alert-primary text-center">{{ session('msg') }}</div>

@endif
    <button class="btn btn-primary m-5">Test</button>
@endsection