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
        <br><br>

        @if (count($categories) > 0)
            <ul>
                @foreach ($categories as $category)
                    <li class="cat-list">{{ $category->name }}<br>
                        <div class="crud-wrapper">
                            <a href="/"><div class="crud-button view-button">View</div></a>
                            <a href="/edit"><div class="crud-button edit-button">Edit</div></a>
                            <div class="crud-button delete-button">Delete</div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            No categories yet, create your first one!
        @endif
        
    </div>
    
@endsection
