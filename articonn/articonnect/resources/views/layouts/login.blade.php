
<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title','ARTICONNECT')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/jarallax.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">

        <style>
            .selectclass{
                width: 100%;
                display: block;
                border: 1px solid #ebebeb;
                background: #fff;
                border-radius: 3px;
                padding: 13px 20px;
            }
        </style>
    </head>
    <body>

        <!-- header-area -->
        <header class="header-style-two inner-page-header">
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-md-6 d-none d-md-block">
                            <div class="header-top-action">
                                <ul>
                                    <li><i class="far fa-envelope"></i><a href="info@articonnect.ci"><span class="__cf_email__">info@articonnect.ci</span></a></li>
                                    <li><i class="far fa-clock"></i> 08h00 à 17h00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-top-right">
                                <ul>
                                    <li class="header-top-social">
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                                        <a href="#"><i class="fab fa-instagram-square"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li class="header-top-login">
                                        <a href="{{ url('/connexion') }}"><i class="far fa-user-circle"></i> Connexion</a>
                                        <a href="{{ url('/inscription') }}"> S'inscrire en tant que professionel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="{{ url('/') }}" class="sticky-logo-none"><img src="{{ asset('public/img/logo.png') }}" alt="Logo"></a>
                                        <a href="{{ url('/') }}" class="sticky-logo-active"><img src="{{ asset('public/img/logo.png') }}" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active"><a href="{{ url('/') }}">Accueil</a></li>

                                            <li class=""><a href="{{ url('/presentation') }}">Qui sommes-nous ?</a></li>

                                            <li class="dropdown"><a href="{{ url('/artisans') }}">Nos artisans</a></li>

                                            <li class="dropdown"><a href="{{ url('/articles-artisans') }}">Articles artisans</a></li>

                                            <li><a href="{{ url('/contacts') }}">Contacts</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="{ url('/') }}"><img src="{{ asset('public/img/logo.png') }}" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>

        @yield('content')


            <div class="footer-brand-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-logo">
                                <a href="{ url('/') }}"><img src="{{ asset('public/img/logo_f.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="row footer-brand-active">
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="{{ asset('public/img/brand/1.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="{{ asset('public/img/brand/2.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="{{ asset('public/img/brand/3.png') }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-brand-item">
                                        <a href="#"><img src="{{ asset('public/img/brand/4.png') }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <footer class="footer-bg">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget black-bg mb-50">
                                <div class="fw-title mb-30">
                                    <h4 class="title">Contacts</h4>
                                </div>
                                <div class="footer-contact">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fas fa-phone"></i></div>
                                            <div class="content">
                                                <span>TELEPHONE</span>
                                                <p><a href="tel:12345678">+225 01 02 03 04 05</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-envelope"></i></div>
                                            <div class="content">
                                                <span>EMAIL</span>
                                                <p><a href="info@articonnect.ci"> info@articonnect.ci</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="content">
                                                <span>SIEGE</span>
                                                <p>Cocody 2 plateaux</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-right-wrap">
                                <div class="row justify-content-between">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="footer-widget mb-50">
                                            <div class="fw-title mb-30">
                                                <h4 class="title">Metiers</h4>
                                            </div>
                                            <div class="fw-link">
                                                <ul>
                                                    <li><a href="#">Peintre</a></li>
                                                    <li><a href="#">Plomberie</a></li>
                                                    <li><a href="#">Couture</a></li>
                                                    <li><a href="#">Maçonnerie</a></li>
                                                    <li><a href="#">Menuiserie</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="footer-widget mb-50">
                                            <div class="fw-title mb-30">
                                                <h4 class="title">Racourcis</h4>
                                            </div>
                                            <div class="fw-link">
                                                <ul>
                                                    <li><a href="{ url('/') }}">Accueil</a></li>
                                                    <li><a href="{ url('/presentation') }}">Qui sommes-nous ?</a></li>
                                                    <li><a href="{ url('/artisans') }}">Nos artisans</a></li>
                                                    <li><a href="{ url('/articles-artisans') }}">Articles artisans</a></li>
                                                    <li><a href="{ url('/contacts') }}">Contacts</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 col-md-6">
                                        <div class="footer-widget mb-50">
                                            <div class="fw-title mb-30">
                                                <h4 class="title">Newsletter</h4>
                                            </div>
                                            <div class="footer-newsletter">
                                                <form action="#">
                                                    <input type="email" placeholder="Eail...">
                                                    <button><i class="fas fa-angle-double-right"></i></button>
                                                </form>
                                            </div>
                                            <div class="footer-social">
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="copyright-text">
                                <p>Copyright © 2024. Tous droits réservés. Université Virtuelle de Côte d'Ivoire</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="scroll-top scroll-to-target" data-target="html">
                                <i class="fas fa-angle-up"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript">

            function searchcommune(ville){

                if(ville == "abidjan"){
                    $('#idcommune').show('slow');
                    $('#idcommune').removeAttr('style');

                }else{
                    $('#idcommune').css('display','none');
                }

            }

        </script>

        <script src="{{ asset('public/js/vendor/jquery-3.5.0.min.js') }}"></script>
        <script src="{{ asset('public/js/popper.min.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('public/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.accrue.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('public/js/jarallax.min.js') }}"></script>
        <script src="{{ asset('public/js/slick.min.js') }}"></script>
        <script src="{{ asset('public/js/ajax-form.js') }}"></script>
        <script src="{{ asset('public/js/wow.min.js') }}"></script>
        <script src="{{ asset('public/js/aos.js') }}"></script>
        <script src="{{ asset('public/js/plugins.js') }}"></script>
        <script src="{{ asset('public/js/main.js') }}"></script>
    </body>
</html>

