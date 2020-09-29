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
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </div>

        <div>
            You're now logged in
        </div>

        <a href="/login">Logout</a>
       

        <footer>
            terms | privacy policy
        </footer>

    </body>
</html>