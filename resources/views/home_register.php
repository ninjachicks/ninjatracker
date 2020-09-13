<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ninjatracker</title>
    </head>

    <body>

        <div>
            You're successfully registered and can now log in
        </div>

        <form method="post" action="">
            <input type="text" name="nickname">
            <input type="password" name="password">
            <button type="submit">Register</button>
        </form>

        <a href="/login">Login</a>
       

    </body>
</html>