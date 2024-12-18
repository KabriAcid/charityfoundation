@extends('layouts.app')
@section('title', 'Dashboard - Charity Foundation')

@section('content')
    <h1>Admin Dashboard</h1>
    <p>Manage donations, events, and content.</p>
    <a href="{{ route('home') }}">Back to Home</a>
@endsection
