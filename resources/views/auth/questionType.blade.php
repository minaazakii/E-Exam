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
                <h1>Question Type</h1>
                <p>Please Select The Question Type</p>


            </div>
        </section>
        <section class="signup">
                <h2>
                    Question is.......
                </h2>
                <div class="choice">
                    <a href="{{ route('addTF',$id) }}"> True or False</a>
                    <a href="{{ route('addQuestionIndex',$id) }}">MCQ</a>
                    <a href="{{ route('showExam') }}">Finish</a>
                </div>

            </div>

        </section>
    </body>

</html>
