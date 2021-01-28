<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Max van Gorp">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-md mb-5">
                <div class="navbar-collapse collapse w-100">
                    <a href="/" class="navbar-brand text-white">Home</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white mr-3" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mr-3" href="{{url('work')}}">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white mr-3" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('main')
    </div>
    <script src="{{ url('assets/js/script.js') }}"></script>
</body>

</html>