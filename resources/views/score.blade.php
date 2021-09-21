<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/fontawesome.min.css">
    <link rel="stylesheet" href="assests/css/all.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Index</title>
</head>
<body>
    <div class="dashboard">
        <div class="container-fluid">
            <div class="q-a">
                <div class="row">
                    <div class="col-12 top-header">
                        <div class="title text-center">
                            <i class="fas fa-graduation-cap"></i> &nbsp;
                            <span>Online Exam Admin</span>&nbsp;&nbsp; &nbsp;
                            <i class="fas fa-graduation-cap"></i>
                        </div>

                        <div class="que-data-container">
                            <form>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12" style="text-align: center;">
                                            <label for="Q" style="font-size: 30px; font-weight: 500;">Your Mark: </label>
                                            <h1 style="color: rgb(96, 129, 228); font-weight: 500;">{{ $score }}</h1>
                                        </div>



                                        <div class="col-12 text-center add-btn">
                                            <a href="{{ route('showExam') }}" class="btn btn-outline-primary">Return to Exams</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>












    <script src="assests/js/jquery-3.4.1.min.js"></script>
    <script src="assests/js/bootstrap.min.js"></script>
    <script src="assests/js/popper.js"></script>
    <script src="assests/js/main.js"></script>
</body>
</html>
