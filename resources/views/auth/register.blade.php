<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="E-exam site">
        <link rel="stylesheet" href="/CSS/style.css">
        <title>E-exam</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
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
                <a href="{{ route('loginIndex') }}">Already have an account</a>

            </div>
        </section>
        <section class="signup">
                <h2>
                    You are ..
                </h2>
                <div class="choice">
                    <a href="{{ route('regStudent') }}"> Student.</a>
                    <a href="{{ route('regDoctor') }}">Teacher.</a>
                </div>

            </div>

        </section>
    </body>

</html>
