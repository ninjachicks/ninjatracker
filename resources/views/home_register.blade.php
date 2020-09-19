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
            @csrf
            <input type="text" name="nickname" required>
            <input type="password" name="password" required>
            <button type="submit">Register</button>
        </form>

        <a href="/login">Login</a>
       

    </body>
</html>