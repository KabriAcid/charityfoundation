@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <h1>About Our Charity</h1>
    <p>Founded in 2018, we aim to improve lives through community-driven initiatives.</p>
    <a href="{{ route('home') }}">Back to Home</a>
@endsection
