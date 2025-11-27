

@extends('layout')
@section('content')
    <h1>Contact Us</h1>
    <p>If you have any questions, feel free to reach out to us!</p>
    <form action="/contact" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
@endsection