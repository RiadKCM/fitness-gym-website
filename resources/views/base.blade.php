


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gym Template">
    <meta name="keywords" content="Gym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap') }}" rel="stylesheet">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap') }}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="css/flaticon.css" type="text/css">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/style.css')}}" type="text/css">
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
                        <img src="{{ url('img/logo.png') }}" alt="">
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
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>

                    <div class="to-social">
                        @auth
                            <!-- Menu déroulant pour l'utilisateur connecté -->
                            <div class="dropdown">
                                <button class="dropbtn">{{ Auth::user()->name }} <span class="caret">&#9660;</span></button>
                                <div class="dropdown-content" style="display:none;">
                                    <a href="{{ route('profile.edit') }}">Profile</a>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Log Out
                                    </a>
                                </div>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <!-- Liens pour l'utilisateur non connecté -->
                            <a href="{{ route('login') }}">Connexion</a>
                            <a href="{{ route('register') }}">S'inscrire</a>
                        @endauth
                    </div>

                    <style>
                        /* Style pour le menu déroulant */
                        /* Style pour le menu déroulant */
                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        .dropbtn {
                            background-color: #4F4F4F; /* Dark grey background */
                            color: white; /* White text color */
                            padding: 8px;
                            font-size: 16px;
                            border: none;
                            cursor: pointer;
                            text-align: left;
                            white-space: nowrap;
                        }

                        .dropdown-content {
                            background-color: #4F4F4F; /* Dark grey background */
                            color: white; /* White text color */
                            display: none;
                            position: absolute;
                            left: 0;
                            right: 0;
                            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            z-index: 1;
                            box-sizing: border-box; /* Include padding and border in the element's total width and height */
                        }

                        .dropdown-content a {
                            color: white; /* White text color */
                            padding: 1px; /* Same padding as .dropbtn for alignment */
                            text-decoration: none;
                            display: block;
                            box-sizing: border-box; /* Include padding in the element's total width */
                        }

                        /* Affichage du menu au survol */
                        .dropdown:hover .dropdown-content {
                            display: block;
                        }

                        /* Style pour le nom de l'utilisateur et la flèche */
                        .dropbtn .caret {
                            border-top: 4px solid white; /* Style de la flèche */
                            margin-left: 5px;
                        }

                        /* Style pour changer la flèche en mode survol */
                        .dropdown:hover .dropbtn .caret {
                            border-top: 4px solid #aaa; /* Light grey color for the arrow on hover */
                        }

                    </style>

                    <script>
                        // Script pour gérer l'affichage du menu déroulant
                        document.addEventListener('DOMContentLoaded', (event) => {
                            const dropdown = document.querySelector('.dropdown');
                            dropdown.addEventListener('click', function(event) {
                                this.querySelector('.dropdown-content').style.display = 'block';
                            });
                            window.addEventListener('click', function(e){
                                if (!dropdown.contains(e.target)){
                                    dropdown.querySelector('.dropdown-content').style.display = 'none';
                                }
                            });
                        });
                    </script>

                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->

@yield('content')

<!-- Footer Section Begin -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#"><img src="{{ url('img/logo.png') }}" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                    <div class="fa-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa  fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Classes</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fs-widget">
                    <h4>Tips & Guides</h4>
                    <div class="fw-recent">
                        <h6><a href="#">Physical fitness may help prevent depression, anxiety</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                    <div class="fw-recent">
                        <h6><a href="#">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ url('js/jquery.barfiller.js') }}"></script>
<script src="{{ url('js/jquery.slicknav.js') }}"></script>
<script src="{{ url('js/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/main.js') }}"></script>



</body>

</html>