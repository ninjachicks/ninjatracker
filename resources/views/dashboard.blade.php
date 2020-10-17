<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ninjatracker</title>
        <link rel="stylesheet" href="/css/ninjatracker_main.css">
    </head>

    <body>

        <div class="nav">
            <a href="/" target="_self"><img class="ninja-logo" src="/images/ninja-logo.png"></a>
            <a class="nav-link" href="/logout">Logout</a>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
        </div>

        <div class="main">
            <h1>Dashboard</h1>
            <h3>Welcome, {{ $username ?? ''}}!</h3>
            Your ID is {{ $user ?? 'xx' }}.
            <br><br>
            Create a new category: <br><br>

            <a class="button" href="/add_category"><div class="button button-submit">Create new category</div></a>

        </div>

        <footer>
            terms | privacy policy
        </footer>

    </body>
</html>
