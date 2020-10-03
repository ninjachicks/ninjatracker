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
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
        </div>

        <div class="main">
            <h1>Dashboard</h1>
            <h3>Create a new category: </h3><br><br>

            <form method="post" action="">
                @csrf
                <input class="input-field" type="text" name="name" value="New Category" required><br>
                <button class="button-submit" type="submit">Create new category</button>
            </form>

        </div>

        <footer>
            terms | privacy policy
        </footer>

    </body>
</html>
