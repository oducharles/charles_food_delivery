<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Home</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin/css/normalize.css') }}">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">
    <script src="{{ asset('admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!--Mainmenu-area-->
    <div class="mainmenu-area" data-spy="affix" data-offset-top="100">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <h2>My Foods Admin</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/admin_home">{{__('Home') }}</a></li>
                    <li><a href="/stored_food">{{ __('Register Foods') }}</a></li>
                    <li><a href="/view_all_orders">{{ __('View All Orders') }}</a></li>
                    <li><a href="/verify">{{ __('Verify Orders') }}</a></li>

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    <!--Mainmenu-area/-->

    <!--Header-area-->
    <header class="header-area relative overlay" id="home-page"><!--relative overlay full-height v-center--> 
        <div class="absolute anlge-bg"></div>
        <main class="py-4" style="text-align: center;">
            @yield('content')
        </main>
    </header>
    <!--Header-area/-->


    <!--Vendor-JS-->
    <script src="{{ asset('admin/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugin-JS-->
    <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin/js/contact-form.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('admin/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('admin/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('admin/js/wow.min.js') }}"></script>
    <!--Main-active-JS-->
    <script src="{{ asset('admin/js/main.js') }}"></script>

    <script src="{{ URL::asset('../all_jquery/jquery-3.3.1.js') }}"></script>
    <script>

        $(function() {

            $('.deletefood').on('submit', function(){
            if (confirm("Are you sure you want to delete this food?")){
                return true;
            } else {
                return false;
            }
        });

        });
    </script>
</body>

</html>
