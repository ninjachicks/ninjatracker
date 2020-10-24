<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ninjatracker</title>
        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
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
                <h3>New?</h3>
                Create an account:<br><br>

                <form method="post" action="">
                    @csrf
                    <input class="input-field" type="text" name="name" value="Username" required><br>
                    <input class="input-field" type="password" name="password" value="Password" required><br><br>
                    <input id="terms" type="checkbox" name="terms-check" value="Terms" required>
                    <label class="terms" for="terms">I accept the <a href="" target="_blank">terms and conditions</a> and have read and understood the <a href="" target="_blank">privacy policy</a>.</label><br>
                    <button class="button-submit" type="submit">Register</button>
                </form>

                Already have an account?
                <a href="/login">Login</a>
            </div>
            
        </div>
        

        <footer>
            terms | privacy policy
        </footer>

    </body>
</html>