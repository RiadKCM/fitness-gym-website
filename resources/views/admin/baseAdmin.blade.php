<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoMuscu</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="canvas-search search-switch">
            <i class="fa fa-search"></i>
        </div>
        <nav class="canvas-menu mobile-menu">
            <ul>              
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li><a href="{{ url('/about') }}">A Propos</a></li>
                <li><a href="{{ url('/cours') }}">Cours</a></li>
                <li><a href="{{ url('/abonnement') }}">Abonnements</a></li>
                <li><a href="{{ url('/teams') }}">Nos coachs</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                @if(auth()->user())
                <li><a href="{{ url('/gestion') }}">Gestion</a></li>
                @endif
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Accueil</a></li>
                            <li><a href="{{ url('/about') }}">A Propos</a></li>
                            <li><a href="{{ url('/cours') }}">Cours</a></li>
                            <li><a href="{{ url('/abonnement') }}">Abonnements</a></li>
                            <li><a href="{{ url('/teams') }}">Nos coachs</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            @if(auth()->user())
                            <li><a href="{{ url('/gestion') }}">Gestion</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="top-option">
                        <div class="to-search search-switch">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="bh-text">
                        <h3>@yield('title2','Accès administrateur')</h3>
                        <br>
                            <div class="leave-comment">
                                <div class="leave-comment" style="display: flex; flex-direction: column; align-items: center;">
                                    <div style="flex: 1;">
                                        @yield('content')
                                    </div>
                                    <a href='{{ route('admin.admin') }}' style="align-self: flex-end;">Administrateur</a>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                            <!-- <div class="col-lg-6">
                                <div class="leave-comment">
                                    <h5>Leave a comment</h5>
                                    <form action="#">
                                        <input type="text" placeholder="Name">
                                        <input type="text" placeholder="Email">
                                        <input type="text" placeholder="Website">
                                        <textarea placeholder="Comment"></textarea>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div> -->

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.barfiller.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('/Users/riad/Desktop/L3_MIAGE/S5/Dev_web/projet_web/resources/js/app.js')}}"></script>


</body>

</html>
