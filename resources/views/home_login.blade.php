@extends('app')

@section('title', 'Login')

@section('content')
    <div class="form-wrapper">
        <h3>Login</h3><br>
        <div class="terms">
            Don't have an account? <a href="/register">Register</a> first.<br><br>
        </div>

        <form method="post" action="">
            @csrf
            <input class="input-field" type="text" name="name" value="Username" required><br>
            <input class="input-field" type="password" name="password" value="Password" required><br><br>
            <button class="button-submit" type="submit">Login</button>
        </form>

        <div class="terms">
            Forgot your username or password?<br>
            <a href="/login">Do this...</a>
        </div>
    </div>
@endsection