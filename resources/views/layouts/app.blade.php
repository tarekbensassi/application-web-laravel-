<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Edusquad - Education Template">
    <!-- ========== Page Title ========== -->
    <title>EvalNet</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('frontEnd/assets/images/favicon.png') }}"
        type="image/x-icon">
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800&amp;display=swap" rel="stylesheet">
    <!-- ========== Start Stylesheet ========== -->
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontEnd/assets/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontEnd/assets/css/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/assets/css/style.css') }}">
</head>
<!--start preloader-->
<div class="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--e-->
<div class="page-wrapper" id="page-wrapper">
    <!-- start top header -->
    <header class="top-header py-2">
        <div class="container">
            <div class="row align-content-center">
                <div class="col-xl-3 col-lg-4 col-md-12 text-left top-btn">
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="about.html">
                            Qui sommes-nous</a>

                    </div>
                    @auth
               
                    
                          
                           
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="btn theme-orange" type="submit">Déconnexion</button>
                                  </form>
                             
                                 
                                   

                           
                    @else
                        <a href="{{ route('login') }}" class="btn theme-orange">Se connecter</a>

                        @if(Route::has('register'))

                            <a href="{{ route('register') }}"
                                class="btn theme-orange" />Inscription</a>
                        @endif
                    @endauth


                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 py-2 font-weight-bold f-15 announcement">
                    <i class="fa fa-bullhorn mr-3"></i><span>
                        Annonce</span>
                </div>
                <div class="col-xl-7 col-lg-5 col-md-8">
                    <p class="marquee"><span>

                            il y a beaucoup des offres avec nous ... nous sommes toujours actifs participez dés
                            maintenant .</span>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <!-- end top header -->
    <!-- start main header -->
    <header class="main-header" id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset('frontEnd/assets/images/logo.png') }}" class="img-fluid"
                        alt="Edusquad">
                </a>
                <span class="navbar-toggler">
                    <i class="ti-align-left" onclick="openNav()"></i>
                </span>
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">À propos</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('about')}}">
                                    Qui sommes-nous</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Publicité</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('course')}}">
                                    Matière</a>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faculties')}}">Offres</a>
                        </li>


                      
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer class="theme-blue">
        <div class="container">
            <div class="footer-top border-bottom pt-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6" data-aos="fade-in" data-aos-duration="1050">
                        <a href="{{url('/')}}"><img
                                src="{{ asset('frontEnd/assets/images/logo.png') }}"
                                class="img-fluid mb-3" alt="Edusquad"></a>
                        <p>plateforme d'évaluation pour gérer des tests en ligne.</p>
                        <ul class="social-icon">
                            <li><a href="javascript:"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-skype"></i></a></li>
                            <li><a href="javascript:"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6" data-aos="fade-in" data-aos-duration="550">
                        <h5 class="font-weight-bold mb-3">Menu</h5>
                        <ul>
                            <li><a href="{{url('/')}}"><i class="fa fa-angle-double-right mr-2"></i>Acceuil</a></li>
                            <li><a href="about.html"><i class="fa fa-angle-double-right mr-2"></i>A PROPOS</a></li>
                            <li><a href="student.html"><i class="fa fa-angle-double-right mr-2"></i>Student Corner</a>
                            </li>
                            <li><a href="{{route('faculties')}}"><i class="fa fa-angle-double-right mr-2"></i>offres</a></li>
                            <li><a href="achievement.html"><i class="fa fa-angle-double-right mr-2"></i>blog</a></li>
                            <li><a href="career.html"><i class="fa fa-angle-double-right mr-2"></i>Inscription</a></li>
                            <li><a href="{{route('contact')}}"><i class="fa fa-angle-double-right mr-2"></i>Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-md-5 mb-4" data-aos="fade-in" data-aos-duration="1050">
                        <h5 class="font-weight-bold mb-3">Nouvelles</h5>
                        <div class="row">
                            <div class="col-md-4 col-sm-2 col-2 mb-2 pr-0">
                                <img src="{{ asset('frontEnd/assets/images/thumb_1.jpg') }}"
                                    class="img-fluid" alt="Gallery">
                            </div>
                            <div class="col-md-4 col-sm-2 col-2 mb-2 pr-0">
                                <img src="{{ asset('frontEnd/assets/images/thumb_2.jpg') }}"
                                    class="img-fluid" alt="Gallery">
                            </div>
                            <div class="col-md-4 col-sm-2 col-2 mb-2 pr-0">
                                <img src="{{ asset('frontEnd/assets/images/thumb_3.jpg') }}"
                                    class="img-fluid" alt="Gallery">
                            </div>
                            <div class="col-md-4 col-sm-2 col-2 pr-0">
                                <img src="{{ asset('frontEnd/assets/images/thumb_4.jpg') }}"
                                    class="img-fluid" alt="Gallery">
                            </div>
                            <div class="col-md-4 col-sm-2 col-2 pr-0">
                                <img src="{{ asset('frontEnd/assets/images/thumb_5.jpg') }}"
                                    class="img-fluid" alt="Gallery">
                            </div>
                            <div class="col-md-4 col-sm-2 col-2 pr-0">
                                <img src="{{ asset('frontEnd/assets/images/thumb_6.jpg') }}"
                                    class="img-fluid" alt="Gallery">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pl-lg-5  mb-md-5" data-aos="fade-in" data-aos-duration="1050">
                        <h5 class="font-weight-bold mb-3">Contact </h5>
                        <ul class="address-icon">
                            <li class="mb-3"><i class="fa fa-map-marker mr-3 color-orange"></i> tunis
                            </li>
                            <li class="mb-3"><i class="fa fa-phone mr-3 color-orange"></i>+216 52015163</li>
                            <li class="mb-3"><i class="fa fa-envelope color-orange mr-3"></i>hanaalaya4@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- end footer -->
    <a href="#" id="scroll"><span></span></a>
</div>
<!-- ===============jQuery Frameworks============= -->
<script src="{{ asset('frontEnd/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/aos.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/script.js') }}"></script>
<script src="{{ asset('frontEnd/assets/js/page/home/home.js') }}"></script>
</body>


</html>
