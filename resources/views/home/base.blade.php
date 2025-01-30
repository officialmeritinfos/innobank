<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="	agency, ai, ai writer, app landing, creative, crm, html template, hosting, mobile app, multipurpose, payment, saas, software, support">
    <meta name="description" content="Gen Z bank of the future.">
    <meta property="og:site_name" content="Piku">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$siteName}} - {{$pageName}}">
    <meta name='og:image' content='{{asset('home/images/'.$web->logo)}}'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#0D1A1C">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#0D1A1C">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#0D1A1C">
    <title>{{$pageName}} - {{$siteName}}</title>
    <!-- Favicon Link -->
    <link rel="icon" type="image/png" href="{{asset('home/images/loader.svg')}}">
    @stack('css')
    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 15px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }
    </style>

    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 10rem;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}" media="all">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.min.css')}}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/responsive.css')}}" media="all">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js')}}"></script>
    <script src="{{asset('home/vendor/html5shiv.js')}}"></script>
    <script src="{{asset('home/vendor/respond.js')}}"></script>
    <![endif]-->
</head>

<body>
<div class="main-page-wrapper dark-bg p-30">
    <!-- ===================================================
        Loading Transition
    ==================================================== -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="icon"><img src="{{asset('home/images/loader.svg')}}" alt="" class="m-auto d-block"> <span></span></div>
            <div class="txt-loading">
                <div id="preloader">
                    @foreach (str_split($siteName) as $char)
                        <span data-text-preloader="{{ $char }}" class="letters-loading">
                            {{ $char }}
                        </span>
                    @endforeach
                </div>

            </div>
        </div>
    </div>



    <!--
    =============================================
        Theme Main Menu
    ==============================================
    -->
    <header class="theme-main-menu menu-style-one">
        <div class="inner-content bg-wrapper bg-one border-20">
            <div class="top-header position-relative">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo order-lg-0">
                        <a href="{{url('/')}}" class="d-flex align-items-center">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt="">
                        </a>
                    </div>
                    <!-- logo -->
                    <div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
                        <ul class="d-flex align-items-center style-none">
                            <li class="d-none d-md-inline-block ms-3">
                                <a href="login" class="btn-one">Let’s Started</a>
                            </li>
                        </ul>
                    </div>
                    <nav class="navbar navbar-expand-lg p0 order-lg-2">
                        <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav align-items-lg-center">
                                <li class="d-block d-lg-none"><div class="logo"><a href="{{url('/')}}" class="d-block">
                                            <img src="{{asset('home/images/'.$web->logo)}}" alt=""></a></div></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('home') }}" role="button"  aria-expanded="false">Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('about') }}" role="button"  aria-expanded="false">About
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('services') }}" role="button"  aria-expanded="false">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('faqs') }}" role="button"  aria-expanded="false">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('home.contact') }}" role="button"  aria-expanded="false">
                                        Contact
                                    </a>
                                </li>
                                <li class="d-md-none ps-3 pe-3 mt-20">
                                    <a href="{{ route('register') }}" class="btn-one w-100">Let’s Started</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div> <!--/.top-header-->
        </div> <!-- /.inner-content -->
    </header>
    <!-- /.theme-main-menu -->

    @yield('content')

    <!--
=====================================================
    Fancy Banner One
=====================================================
-->
    <div class="fancy-banner-one position-relative z-1 bg-one border-30 text-center pt-130 lg-pt-80 pb-130 lg-pb-80 mb-30 lg-mb-20">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7 m-auto">
                    <div class="title-one mb-35 lg-mb-30">
                        <h2>Take Control of Your Finances</h2>
                    </div>
                </div>
            </div>
            <p class="fs-28 mb-45 lg-mb-30">Get a secure and flexible digital banking experience with instant access to virtual debit cards, seamless transactions, and hassle-free international payments.</p>
            <a href="{{route('register')}}" class="btn-two xl">Get Started Now</a>
        </div>
        <img src="{{asset('home/images/assets/ils_02.png')}}" alt="" class="shapes shape_01">
        <img src="{{asset('home/images/assets/ils_03.png')}}" alt="" class="shapes shape_02">
    </div>


    <!--
    =====================================================
        Footer One
    =====================================================
    -->
    <div class="footer-one border-30 bg-one">
        <div class="position-relative z-1">
            <div class="container">
                <!-- /.email-banner -->
                <div class="position-relative">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="footer-intro mb-30">
                                <div class="logo">
                                    <a href="{{url('/')}}">
                                        <img src="{{asset('home/images/'.$web->logo)}}" alt="">
                                    </a>
                                </div>
                                <!-- logo -->
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="footer-nav mb-20">
                                <ul class="footer-nav-link style-none">
                                    <li><a href="{{ route('about') }}">About </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <div class="footer-nav mb-20">
                                <ul class="footer-nav-link style-none">
                                    <li><a href="{{ route('faqs') }}">Faq’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-nav mb-20">
                                <ul class="footer-nav-link style-none">
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="footer-contact mb-20">
                                <p class="fw-500 fs-20 text-dark mb-30 md-mb-20">
                                    {!! $web->address !!}
                                </p>
                                @if($web->phone)
                                    <a href="tel:{{$web->phone}}" class="tel fw-500 fs-24 tran3s mb-40">{{$web->phone}}</a>
                                @endif
                                <ul class="style-none d-flex align-items-center social-icon">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="copyright-text m0"><strong class="text-dark">@ 2022 - {{date('Y')}}.</strong> All Right Reserved. </p>
                </div>
            </div>
        </div>
    </div> <!-- /.footer-one -->




    <button class="scroll-top">
        <i class="bi bi-arrow-up-short"></i>
    </button>




    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="{{asset('home/vendor/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- WOW js -->
    <script src="{{asset('home/vendor/wow/wow.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('home/vendor/slick/slick.min.js')}}"></script>
    <!-- Fancybox -->
    <script src="{{asset('home/vendor/fancybox/fancybox.umd.js')}}"></script>
    <!-- Lazy -->
    <script src="{{asset('home/vendor/jquery.lazy.min.js')}}"></script>
    <!-- js Counter -->
    <script src="{{asset('home/vendor/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('home/vendor/jquery.waypoints.min.js')}}"></script>
    <!-- validator js -->
    <script src="{{asset('home/vendor/validator.js')}}"></script>

    <!-- Theme js -->
    <script src="{{asset('home/js/theme.js')}}"></script>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '4226f74657666671c580b27bcb815030dae997d2';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</div> <!-- /.main-page-wrapper -->
</body>
</html>
