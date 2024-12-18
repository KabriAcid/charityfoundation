@extends('layouts.app')

@section('title', 'Donate')

@section('content')
     <h1>Make a Donation</h1>
    <p>Your contributions help us make a bigger impact.</p>
    <form method="POST" action="#">
        @csrf
        <label for="amount">Donation Amount:</label>
        <input type="number" id="amount" name="amount" required>
        <button type="submit">Donate</button>
    </form>
    <a href="{{ route('home') }}">Back to Home</a>
@endsection

