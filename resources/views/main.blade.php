<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Group Us</title>
    <!-- <script https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js>
    </script> -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- icon css include -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}">

    <!-- carousel css include -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <!-- others css include -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/lightcase.css')}}">

    <link id="color_theme" rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/default.css')}}">

    <!-- custom css include -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">


</head>


<body class="homepage3 default-header-p">


    <!-- backtotop - start -->
    <div id="thetop" class="thetop"></div>
    <div class='backtotop'>
        <a href="#thetop" class='scroll'>
            <i class="fas fa-angle-double-up"></i>
        </a>
    </div>


    <!-- header-section - start
        ================================================== -->
    <header id="header-section" class="header-section default-header-section auto-hide-header clearfix">

        <!-- header-top - start -->
        <div class="header-top">
            <div class="container">
                <div class="row">

                    <!-- basic-contact - start -->
                    <div class="col-lg-6">
<!--
                        <div class="basic-contact">
                            <ul>
                                <li>
                                    <a href="#!">
                                        <i class="fas fa-envelope"></i>
                                        info@meetup.com
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fas fa-phone"></i>
                                        040-48541273
                                    </a>
                                </li>
                            </ul>
                        </div>
-->
                    </div>
                    <!-- basic-contact - end -->

                    <!-- register-login-group - start -->
                    <div class="col-lg-6">
                        <div class="register-login-group">
                            <ul>
                                <li>
                                    <a href="#register-modal" class="register-modal-btn">
                                        <i class="fas fa-user-plus"></i>
                                        SignUp
                                    </a>
                                    <div id="register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: {{asset('assets/images/login-modal-bg.jpg')}};">
                                        <div class="overlay-black clearfix">

                                            <!-- leftside-content - start -->
                                            <div class="leftside-content">
                                                <div class="site-logo-wrapper mb-80">
                                                    <a href="#!" class="logo">
                                                        <img src="assets/images/0.site-logo.png" alt="logo_not_found">
                                                    </a>
                                                </div>
                                                <div class="register-login-link mb-80">
                                                    <ul>
                                                        <li><a href="#!">Login</a></li>
                                                        <li class="active"><a href="#!">Register</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- leftside-content - end -->

                                            <!-- rightside-content - start -->
                                            <div class="rightside-content text-center">

                                                <div class="mb-30">
                                                    <h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
                                                    <span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
                                                </div>

                                                <div class="login-form text-center mb-50">
                                                    <form action="{{url('register')}}" method="post">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <div class="form-item">
                                                            <input type="text" placeholder="User Name" name='username'>
                                                        </div>
                                                        <div class="form-item">
                                                            <input type="password" placeholder="Password" name='password'>
                                                        </div>
                                                        <div class="form-item">
                                                            <input type="password" placeholder="Repeat Password" name='confirm'>
                                                        </div>
                                                        <div class="form-item">
                                                            <input type="email" placeholder="Email Address" name='email'>
                                                        </div>
                                                        
                                                        <button type="submit" class="login-btn">Register Now</button>
                                                    </form>
                                                </div>

                                                <div class="bottom-text white-color">
                                                    <p class="m-0">
                                                        * Denotes mandatory field.
                                                    </p>
                                                    <p class="m-0">** At least one telephone number is required.</p>
                                                </div>

                                            </div>
                                            <!-- rightside-content - end -->

                                            <a class="popup-modal-dismiss" href="#!">
                                                <i class="fas fa-times"></i>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#login-modal" class="login-modal-btn">
                                        <i class="fas fa-sign-in-alt"></i>
                                        Login
                                    </a>
                                    <div id="login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: {{asset('assets/images/login-modal-bg.jpg')}};">
                                        <div class="overlay-black clearfix">

                                            <!-- leftside-content - start -->

                                            <div class="leftside-content">
                                                <div class="site-logo-wrapper mb-80">
                                                    <a href="#!" class="logo">
                                                        <img src="assets/images/0.site-logo.png" alt="logo_not_found">
                                                    </a>
                                                </div>
                                                <div class="register-login-link mb-80">
                                                    <ul>
                                                        <li class="active"><a href="#!">Login</a></li>
                                                        <li><a href="#!">Register</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- leftside-content - end -->

                                            <!-- rightside-content - start -->
                                            <div class="rightside-content text-center">

                                                <div class="mb-30">
                                                    <h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
                                                    <span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
                                                </div>

                                                <div class="fb-login-btn mb-30">
                                                    <a href="#!">
                                                        <span class="icon">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </span>
                                                        login with facebook
                                                    </a>
                                                </div>

                                                <div class="or-text mb-30">
                                                    <span>or sign in</span>
                                                </div>

                                                <div class="login-form text-center mb-50">
                                                    <form  id='form' action="{{url('logins')}}"  method="post">
                                                        <div class="form-item">
                                                            <input type="email" placeholder="example@gmail.com"name='email' >
                                                        </div>
                                                        <div class="form-item">
                                                            <input type="password" placeholder="Password" name='password'>
                                                        </div>
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button id="button1" type="submit" class="login-btn">login now</button>
                                                    </form>
                                                </div>

                                                <div class="bottom-text white-color">
                                                    <p class="m-0">
                                                        * Denotes mandatory field.
                                                    </p>
                                                    <p class="m-0">** At least one telephone number is required.</p>
                                                </div>

                                            </div>
                                            <!-- rightside-content - end -->

                                            <a class="popup-modal-dismiss" href="#!">
                                                <i class="fas fa-times"></i>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- register-login-group - end -->

                </div>
            </div>
        </div>
        <!-- header-top - end -->

        <!-- header-bottom - start -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">

                    <!-- site-logo-wrapper - start -->
                    <div class="col-lg-3">
                        <div class="site-logo-wrapper">
                            <a href="index.php" class="logo">
                                <img src="assets/images/0.site-logo.png" alt="logo_not_found">
                            </a>
                        </div>
                    </div>
                    <!-- site-logo-wrapper - end -->

                    <!-- mainmenu-wrapper - start -->
                    <div class="col-lg-9">
                        <div class="mainmenu-wrapper">
                            <div class="row">

                                <!-- menu-item-list - start -->
                                <div class="col-lg-10">
                                    <div class="menu-item-list ul-li clearfix">
                                        <ul>
                                            <li class="menu-item-has-children active">
                                                <a href="{{url('/')}} ">home</a>

                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{url('groups')}}">groups</a>

                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{url('blogs')}}">blogs</a>

                                            </li>
                                            <li>
                                                <a href="{{url('bestdeals')}}">best deals</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{url('contact')}}">contact</a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- menu-item-list - end -->

                                <!-- menu-item-list - start -->
                                <div class="col-lg-2">
                                    <div class="user-search-btn-group ul-li clearfix">
                                        <ul>
                                            <li>
                                                <a href="profile.php">
                                                    <i class="fas fa-user"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button type="button" class="toggle-overlay search-btn">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                                <!-- search-body - start -->
                                                <div class="search-body">
                                                    <div class="search-form">
                                                        <form action="#">
                                                            <input class="search-input" type="search" placeholder="Search Here">
                                                            <div class="outer-close toggle-overlay">
                                                                <button type="button" class="search-close">
                                                                    <i class="fas fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- search-body - end -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- menu-item-list - end -->

                            </div>
                        </div>
                    </div>
                    <!-- mainmenu-wrapper - end -->

                </div>
            </div>
        </div>
        <!-- header-bottom - end -->

    </header>
    <!-- header-section - end
        ================================================== -->





    <!-- altranative-header - start
        ================================================== -->
    <div class="header-altranative">
        <div class="container">
            <div class="logo-area float-left">
                <a href="index-1.html">
                    <img src="{{asset('assets/images/0.site-logo.png')}}" alt="logo_not_found">
                </a>
            </div>

            <button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- sidebar menu - start -->
        <div class="sidebar-menu-wrapper">
            <div id="sidebar" class="sidebar">
                <span id="sidebar-dismiss" class="sidebar-dismiss">
                    <i class="fas fa-arrow-left"></i>
                </span>

                <div class="sidebar-header">
                    <a href="#!">
                        <img src="assets/images/0.site-logo.png" alt="logo_not_found">
                    </a>
                </div>

                <!-- sidebar-form - start -->
                <div class="sidebar-form">
                    <form action="#">
                        <input id="altmenu-sidebar-search" type="search" placeholder="Search">
                        <label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
                    </form>
                </div>
                <!-- sidebar-form - end -->

                <!-- other-pages-links - start -->
                <div class="menu-link-list other-pages-links">
                    <ul>
                        <li>
                            <a href="index.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="about.html">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="event-listing.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                events
                            </a>
                        </li>
                        <li>
                            <a href="group-listing.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                groups
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                contact us
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- other-pages-links - end -->

                <!-- login-btn-group - start -->
                <div class="login-btn-group">
                    <ul>

                        <li>
                            <a href="#alt-register-modal" class="register-modal-btn">
                                Register
                            </a>
                            <div id="alt-register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix" style="background-image: {{asset('assets/images/login-modal-bg.jpg')}};">
                                <div class="overlay-black clearfix">

                                    <!-- leftside-content - start -->
                                    <div class="leftside-content">
                                        <div class="site-logo-wrapper mb-80">
                                            <a href="#!" class="logo">
                                                <img src="assets/images/0.site-logo.png" alt="logo_not_found">
                                            </a>
                                        </div>
                                        <div class="register-login-link mb-80">
                                            <ul>
                                                <li><a href="#!">Login</a></li>
                                                <li class="active"><a href="#!">Register</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- leftside-content - end -->

                                    <!-- rightside-content - start -->
                                    <div class="rightside-content text-center">

                                        <div class="mb-30">
                                            <h2 class="form-title title-large white-color">Account <strong>Register</strong></h2>
                                            <span class="form-subtitle white-color">Have an account? <strong>LOGIN NOW</strong></span>
                                        </div>

                                        <div class="login-form text-center mb-50">
                                            <form action="#!">
                                                <div class="form-item">
                                                    <input type="text" placeholder="User Name">
                                                </div>
                                                <div class="form-item">
                                                    <input type="password" placeholder="Password">
                                                </div>
                                                <div class="form-item">
                                                    <input type="password" placeholder="Repeat Password">
                                                </div>
                                                <div class="form-item">
                                                    <input type="email" placeholder="Email Address">
                                                </div>
                                                
                                                <button type="submit" class="login-btn">register now</button>
                                            </form>
                                        </div>

                                        <div class="bottom-text white-color">
                                            <p class="m-0">
                                                * Denotes mandatory field.
                                            </p>
                                            <p class="m-0">** At least one telephone number is required.</p>
                                        </div>

                                    </div>
                                    <!-- rightside-content - end -->

                                    <a class="popup-modal-dismiss" href="#!">
                                        <i class="fas fa-times"></i>
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#alt-login-modal" class="login-modal-btn">
                                Login
                            </a>
                            <div id="alt-login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: {{asset('assets/images/login-modal-bg.jpg')}};">
                                <div class="overlay-black clearfix">

                                    <!-- leftside-content - start -->
                                    <div class="leftside-content">
                                        <div class="site-logo-wrapper mb-80">
                                            <a href="#!" class="logo">
                                                <img src="assets/images/0.site-logo.png" alt="logo_not_found">
                                            </a>
                                        </div>
                                        <div class="register-login-link mb-80">
                                            <ul>
                                                <li class="active"><a href="#!">Login</a></li>
                                                <li><a href="#!">Register</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- leftside-content - end -->

                                    <!-- rightside-content - start -->
                                    <div class="rightside-content text-center">

                                        <div class="mb-30">
                                            <h2 class="form-title title-large white-color">Account <strong>Login</strong></h2>
                                            <span class="form-subtitle white-color">Login to our website, or <strong>REGISTER</strong></span>
                                        </div>

                                        <div class="fb-login-btn mb-30">
                                            <a href="#!">
                                                <span class="icon">
                                                    <i class="fab fa-facebook-f"></i>
                                                </span>
                                                login with facebook
                                            </a>
                                        </div>

                                        <div class="or-text mb-30">
                                            <span>or sign in</span>
                                        </div>

                                        <div class="login-form text-center mb-50">
                                            <form action="
                                        " method='post'>
                                                <div class="form-item">
                                                    <input type="email" placeholder="example@gmail.com"   name='username'>
                                                </div>
                                                <div class="form-item">
                                                    <input type="password" placeholder="Password"  name='password'>
                                                </div>
                                                <button type="submit" class="login-btn">login now</button>
                                            </form>
                                        </div>

                                        <div class="bottom-text white-color">
                                            <p class="m-0">
                                                * Denotes mandatory field.
                                            </p>
                                            <p class="m-0">** At least one telephone number is required.</p>
                                        </div>

                                    </div>
                                    <!-- rightside-content - end -->

                                    <a class="popup-modal-dismiss" href="#!">
                                        <i class="fas fa-times"></i>
                                    </a>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- login-btn-group - end -->

                <!-- social-links - start -->
                <div class="social-links">
                    <h2 class="menu-title">get in touch</h2>
                    <div class="mb-15">
                        <h3 class="contact-info">
                            <i class="fas fa-phone"></i>
                            100-2222-9999
                        </h3>
                        <h3 class="contact-info">
                            <i class="fas fa-envelope"></i>
                            info@groupus.com
                        </h3>
                    </div>
                    <ul>
                        <li>
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-twitch"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- social-links - end -->

                <div class="overlay"></div>
            </div>
        </div>
        <!-- sidebar menu - end -->
    </div>
    <!-- altranative-header - end
        ================================================== -->



        @yield('content')
        <!-- default-footer-section - start
        ================================================== -->
        <footer id="footer-section" class="footer-section default-footer-section clearfix">

            <!-- footer-top - start -->
            <div class="footer-top sec-ptb-100 clearfix">
                <div class="container">
                    <div class="row">

                        <!-- basic-info - start -->
                        <div class="col-lg-12 col-md-12 col-md-12">
                            <div class="basic-info mb-50 clearfix">
                                <div class="row">

                                    <!-- basic-info-item - start -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="basic-info-item">
                                            <span class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </span>
                                            <div class="info-content">
                                                <p>100 feet road,</p>
                                                <h3>hyderabad, telangana</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- basic-info-item - end -->

                                    <!-- basic-info-item - start -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="basic-info-item">
                                            <span class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                            <div class="info-content">
                                                <p><a href="#!">carrer@groupus.com</a></p>
                                                <h3><a href="#!">info@groupus.com</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- basic-info-item - end -->

                                    <!-- basic-info-item - start -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="basic-info-item">
                                            <span class="icon">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                            <div class="info-content">
                                                <p><a href="#!">9845632175</a></p>
                                                <h3><a href="#!">040-48541273</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- basic-info-item - end -->
                                    
                                </div>
                            </div>
                        </div>
                        <!-- basic-info - end -->

                        <!-- about-wrapper - start -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="about-wrapper">

                                <!-- site-logo-wrapper - start -->
                                <div class="site-logo-wrapper mb-30">
                                    <a href="index.php" class="logo">
                                        <img src="assets/images/0.site-logo.png" alt="Group Us">
                                    </a>
                                </div>
                                <!-- site-logo-wrapper - end -->

                                <p class="mb-30">
                                    Getting together with real people in real life makes powerful things happen. Group Us brings people together to create thriving communities.
                                </p>

                                <!-- social-links - start -->
                                <div class="social-links ul-li">
                                    <h3 class="social-title">network</h3>
                                    <ul>
                                        <li>
                                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#!"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- social-links - end -->
                                
                            </div>
                        </div>
                        <!-- about-wrapper - end -->

                        <!-- account - start -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="usefullinks-wrapper ul-li-block">
                                <h3 class="footer-item-title">
                                    <strong>Your Account</strong>
                                </h3>
                                <ul>
                                    <li><a href="#login-modal" class="login-modal-btn"  >Log In</a></li>
                                    <li><a href="#register-modal" class="register-modal-btn">Sign Up</a></li>
                                    <li><a href="faq.php">Help</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- account - end -->

                        <!-- meetup - start -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="usefullinks-wrapper ul-li-block">
                                <h3 class="footer-item-title">
                                    <strong>Group Us</strong>
                                </h3>
                                <ul>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#!">Group Us Pro</a></li>
                                    <li><a href="careers.php">Careers</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- meetup - end -->

                        <!-- discover - start -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="usefullinks-wrapper ul-li-block">
                                <h3 class="footer-item-title">
                                    <strong>Discover</strong>
                                </h3>
                                <ul>
                                    <li><a href="topics.php">Topics</a></li>
                                    <li><a href="cities.php">Cities</a></li>
                                    <li><a href="group-listing.php">Groups</a></li>
                                    <li><a href="event-listing.php">Events</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- discover - end -->

                    </div>
                </div>
            </div>
            <!-- footer-top - end -->

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">

                        <!-- copyright-text - start -->
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="copyright-text">
                                <p class="m-0">©2018 <a href="#!" class="site-link">GroupUs.com</a> all right reserved</p>
                            </div>
                        </div>
                        <!-- copyright-text - end -->

                        <!-- footer-menu - start -->
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#!">Privacy policy</a></li>
                                    <li><a href="#!">Cookie policy</a></li>
                                    <li><a href="#!">Terms of Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- footer-menu - end -->

                    </div>
                </div>
            </div>

        </footer>
        <!-- default-footer-section - end
        ================================================== -->










        <!-- fraimwork - jquery include -->
        <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
         @yield('script')

        <!-- <script src="assets/js/create-meetup.js"></script> -->

        <!-- carousel jquery include -->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

        <!-- map jquery include -->
        <script src="{{asset('assets/js/gmap3.min.js')}}"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

        <!-- calendar jquery include -->
        <script src="{{asset('assets/js/atc.min.js'}}"></script>
                ')
        <!-- others jquery include -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js'}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js'}}"></script>
        <script src="{{asset('assets/js/jarallax.min.js'}}"></script>
        <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js'}}"></script>
        <script src="{{asset('assets/js/lightcase.js'}}"></script>
        
        <!-- gallery img loaded - jqury include -->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js'}}"></script>

        <!-- multy count down - jqury include -->
        <script src="{{asset('assets/js/jquery.countdown.js'}}"></script>

        

        <!-- custom jquery include -->
        <script src="{{asset('assets/js/custom.js'}}"></script>
<!-- <script type="text/javascript">        
$("form").submit(function(){
    alert('form submitted');

var data = $("#signup").serialize();
return true;
});

</script>
 -->

 <!-- <script type="text/javascript">
$(document).ready(function () {

    $( "#button1" ).click(function() {
         console.log('ok');
        $( "#form" ).submit();
    });
});
</script> -->


    </body>
</html>