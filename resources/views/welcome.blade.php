<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Martynas Gecas III IST</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <link href="/css/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/css/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/css/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/css/assets/css/style.css" rel="stylesheet">

</head>

<body style="background: cornflowerblue">

<header id="header" class="header-transparent">
    <div class="container">
        <div id="logo" class="pull-left">
            <h1><a href="#hero">MenoNamai</a></h1>
        </div>
        <div>
            @if(Route::has('login'))
                <nav id="nav-menu-container" class="d-flex pt-3">
                    @auth
                        <ul class="nav-menu" >
                            <li style="color: white;
                                list-style-type: none;"
                                class="menu-active pr-2">
                                <a style="color: white;
                                   font-weight: bold;"
                                   href="{{ url('/user') }}"
                                   class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">
                                    {{ __('Namai') }}
                                </a>
                            </li>
                            @else
                                <li style="color: white;
                    list-style-type: none;"
                                    class="menu-active pr-2">
                                    <a style="color: white;
                    font-weight: bold;"
                                       href="{{ route('login') }}"
                                       class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">
                                        {{ __('Prisijungti') }}
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <li style="color: white;
                    list-style-type: none;"
                                        class="menu-active ">
                                        <a style="color: white;
                    font-weight: bold;"
                                           href="{{ route('register') }}"
                                           class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">
                                            {{ __('Registruotis') }}
                                        </a>
                                    </li>
                        </ul>
            @endif
            @endauth
        </div>
        </nav>

    @endif
    </div>
</header>

<section id="hero" style="background-image:url(images/art.jpg); width:1120px; margin-top: 75px;" class="mx-auto">
    <div class="hero-container">
        <h2 style="margin-bottom: -10px;">2020 Kolekcija</h2>
        <h1>Antras dešimtmetis</h1>
        <h2>Modernaus Meno Dvasia<br><br>Martynas Gecas</h2>
        <a href="{{ route('register') }}" class="btn-get-started">Apsilankyti parodoje</a>
    </div>
</section>

<main id="main">
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="/css/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/css/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/css/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/css/assets/vendor/php-email-form/validate.js"></script>
    <script src="/css/assets/vendor/counterup/counterup.min.js"></script>
    <script src="/css/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/css/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/css/assets/vendor/superfish/superfish.min.js"></script>
    <script src="/css/assets/vendor/hoverIntent/hoverIntent.js"></script>
    <script src="/css/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/css/assets/vendor/venobox/venobox.min.js"></script>
    <script src="/css/assets/vendor/aos/aos.js"></script>

    <script src="/css/assets/js/main.js"></script>
</main>

</body>
</html>
