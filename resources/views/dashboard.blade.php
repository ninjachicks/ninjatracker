@extends('app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <h3>Welcome, {{ $username ?? ''}}!</h3>
    Your ID is {{ $user ?? 'xx' }}.
    <br><br>
    Create a new category: <br><br>

    <a class="button" href="/add_category"><div class="button button-submit">Create new category</div></a>
    <br><br>
    <div class="content-textbox">
        <h3>My categories:</h3>
        <ul>
            <li>Hardcoded Category 1</li>
        </ul>
    </div>
    
@endsection
