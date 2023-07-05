@extends('app')

@section('style')
    <style>
        .border {
            border: 1px solid black;
            padding: 1px;
        }
    </style>    
@endsection
@section('content')
    <form method="POST" action="/alphabet-letters">
        @csrf
        <label for="word">Enter a word:</label>
        <input type="text" name="word" id="word" class="border">
        <input type="submit" value="Submit">
    </form>
@endsection