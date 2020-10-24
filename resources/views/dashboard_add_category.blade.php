@extends('app')

@section('title', 'Category')

@section('content')
    <h1>Dashboard</h1>
    <h3>Create a new category: </h3><br><br>

    <form method="post" action="">
        @csrf
        <input class="input-field" type="text" name="name" value="New Category" required><br>
        <button class="button-submit" type="submit">Create new category</button>
    </form>
@endsection
