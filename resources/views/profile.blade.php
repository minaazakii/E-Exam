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
                <div class="nav-menu">
                    <ul>
                        <li><a href="/home1.html" >Home</a></li>
                        <li><a href="exam.html">E-exam</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>

                    </ul>
                </div>
            </nav>
            <div class="kfs">
                <h1>Profile</h1>
                <p>Voluptatem, rerum molestiae ut maiores iste itaque nihil sit nostrum excepturi est illum?</p>
            </div>
        </section>
        <section class="mainprofile">
            <div class="row-pro">
                <div class="img-col">
                    <img src="/img/profile.png" alt="Profile Img">
                </div>

                <div class="pro-col">
                    <div>
                        <label for="username">Name: </label>
                        <h2 id="username">{{ auth()->user()->name }} </h2>
                        <br>
                        @if(auth()->user()->role_id == 3)
                            <label for="faculty">Faculty: </label>
                            <p id="faculty">{{ auth()->user()->faculty }}</p>
                            <br>
                            <label for="level">Level: </label>
                            <p id="level"> {{ auth()->user()->level }}</p>
                            <br>
                        @endif
                        <label for="age">email: </label>
                        <p id="age">{{ auth()->user()->email }}</p>
                        <br>
                        <button class="btn" style="width: 25%; " >Edit Your Profile</button>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
