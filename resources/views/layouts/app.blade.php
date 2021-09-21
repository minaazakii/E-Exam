<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assests/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assests/css/style.css') }}">
</head>
<body>

    @yield('content')



    <script src="{{ asset('assests/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assests/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assests/js/popper.js') }}"></script>
    <script src="{{ asset('assests/js/main.js') }}"></script>

    <script>
        setTimeout(function() {
    $('#success').fadeOut('slow');
    }, 2500);
    </script>
</body>
</html>
