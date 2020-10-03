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
            
            <div class="form-wrapper">
                <h3>Login</h3><br><br>

                <form method="post" action="">
                    @csrf
                    <input class="input-login" type="text" name="nickname" value="Username" required><br>
                    <input class="input-login" type="password" name="password" value="Password" required><br><br>
                    <button class="button-submit" type="submit">Login</button>
                </form>

                Forgot your username or password?
                <a href="/login">Do this...</a>
            </div>
            
        </div>

        <footer>
            terms | privacy policy
        </footer>

    </body>
</html>