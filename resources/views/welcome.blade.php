<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>portfolio</title>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
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
                        <a class="nav-link text-white mr-3" href="#">Work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mr-3" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container-fluid bg-dark text-light">
        <section class="about">
            <h1 aria-label="Hey, I'm Max van Gorp">Hey, I'm <span class="orange">Max van Gorp</span></h1>
            <sub>
                <div class="primary-word-sub">
                    <div class="primary-word-sub__top">I'm</div>
                    <div class="primary-word-sub__bottom">I'm</div>
                </div>
                <div class="primary-word-sub">
                    <div class="primary-word-sub__top">a</div>
                    <div class="primary-word-sub__bottom">a</div>
                </div>
                <div class="primary-word-sub">
                    <div class="primary-word-sub__top">Webdeveloper</div>
                    <div class="primary-word-sub__bottom">Webdeveloper</div>
                </div>
                <div class="primary-word-sub">
                    <div class="primary-word-sub__top">looking</div>
                    <div class="primary-word-sub__bottom">looking</div>
                </div>
                <div class="primary-word-sub">
                    <div class="primary-word-sub__top">to</div>
                    <div class="primary-word-sub__bottom">to</div>
                </div>
                <div class="primary-word-sub">
                    <div class="primary-word-sub__top">create</div>
                    <div class="primary-word-sub__bottom">create</div>
                </div>
                <div class="primary-word-sub">
                    <div class="primary-word-sub__top">stunning</div>
                    <div class="primary-word-sub__bottom">stunning</div>
                </div>
                <div class="primary-word-sub">
                    <div class="primary-word-sub__top">websites</div>
                    <div class="primary-word-sub__bottom">websites</div>
                </div>
            </sub>
        </section>
    </main>
    <script src="{{ url('assets/js/script.js') }}"></script>
</body>

</html>