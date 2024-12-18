@extends('layouts.app')

@section('title', 'Charity Foundation - Home')

@section('content')
    <h1>Welcome to Our Charity Organization</h1>
    <p>Making a difference since 2018.</p>
    <a href="{{ route('about') }}">Learn More About Us</a>
    <a href="{{ route('donate') }}">Make a Donation</a>
@endsection
