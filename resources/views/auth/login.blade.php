<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="E-exam site">
        <link rel="stylesheet" href="/CSS/style.css">
        <title>E-exam</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="icon" href="/img/logo.gif">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="/home1.html"><img src="/img/logo.gif"></a>
            </nav>
            <div class="kfs">
                <h1>Register</h1>
                <p>Voluptatem, rerum molestiae ut maiores iste itaque nihil sit nostrum excepturi est illum?</p>
                <a href="{{ route('whoAreYou') }}">SignUp Now</a>

            </div>
        </section>
        <section class="signup">
            <div class="student-signup">

                    <h2>
                        LogIn.
                    </h2>
                    @if(session('error'))
                        <div id="message" class="text-center text-dark alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('checkLogin') }}" method="POST">
                        @csrf
                        <input name="email" type="email"  id="email" placeholder="E-mail" class="input">
                        <input name="password" type="password"  placeholder="password" class="input">

                        <input type="submit" value="Login" class="submit">

                    </form>


            </div>

        </section>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $("#message").fadeOut(4000);
    </script>

</html>
