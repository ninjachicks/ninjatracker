@extends('app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <h3>Welcome, {{ Auth::user()->name }}!</h3>
    Your ID is {{ Auth::user()->id }}.
    <br><br>

    <a class="button-submit" href="/add_category"><div class="button-submit">Create new category</div></a>
    <br><br>
    <div class="content-textbox">
        <h3>My categories:</h3>
        <ul>
            <li>Hardcoded Category 1</li>
        </ul>
    </div>
    
@endsection
