
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta property="og:site_name" content="Dev Skill" />
        <meta property="og:title" content="Home" />
        <meta property="og:url" />
        <meta name="description" property="og:description" content="Dev Skill is a platform for IT professionals. You can join us to get latest updates on our courses, events, blog posts etc." />
        <meta property="og:image" content="/site/img/default_og_image.png" />
        <meta property="fb:app_id" content="544015372349322" />
        <link rel="shortcut icon" href="/site/img/favicon.png" />

            <title>Dev Skill - Home</title>
            <!-- Font Awesome Icons -->
            <link rel="stylesheet"
                href="/site/css/all.min.css" />
            <!-- daterange picker -->
            <link rel="stylesheet"
                href="/site/css/daterangepicker.css" />
            <!-- Select2 -->
            <link rel="stylesheet"
                href="/site/css/select2.min.css" />
            <link rel="stylesheet"
                href="/site/css/select2-bootstrap4.min.css" />
            <!-- Theme style -->
            <link rel="stylesheet" href="/site/css/adminlte.min.css" />
            <link rel="stylesheet" href="/site/css/site.css" />
            <link href="/site/css/fonts.googleapis.com.css"
                rel="stylesheet" />
        <!-- new -->
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        @stack('css')
                
        </head>
        <body class="layout-navbar-fixed sidebar-collapse">
            <div class="wrapper">
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav d-lg-none">
                        <li class="nav-item">
                            <a class="btn btn-sm btn-outline-secondary"
                            data-widget="pushmenu"
                            href="#">
                                Menu
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item d-sm-inline-block">
                            <a class="nav-link text-body text-lg font-weight-bold" href="/Course">COURSES</a>
                        </li>
                        <li class="nav-item d-sm-inline-block">
                            <a class="nav-link text-body active text-lg font-weight-bold" href="/Webinar">WEBINAR</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a class="nav-link text-body text-lg font-weight-bold" href="/userBlogs">BLOG</a>
                        </li>
                        <li class="nav-item d-sm-inline-block">
                            <a class="nav-link text-body text-lg font-weight-bold" href="/Faq">FAQ</a>
                        </li>
                    </ul> 
                    @auth
                    
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link d-flex align-items-center"
                            data-toggle="dropdown"
                            href="#">
                                    <img src="{{asset("storage/".Auth::user()->image_path)}}"
                                    class="img-circle mr-2"
                                    alt="Photo of " + {{ Auth::user()->name }}
                                    width="40" />
                                <div>
                                    <h6 class="mb-0 text-uppercase text-body text-truncate d-block"
                                    style="max-width: 20vw;">
                                    {{ Auth::user()->name }}
                                    </h6>
                                    <!-- if devcoins > 0 -->
                                    @php
                                    try {
                                        $coin =  null;

                                        if(Auth::user()->devcoin) {
                                            $coin = Auth::user()->devcoin->coin;
                                        }
                                    } catch (\Throwable $th) {
                                        return "there is some problem,please go back";
                                    }
                                        
                                    @endphp
                                    <small>
                                        <img src="/site/img/ic_devcoin.svg"
                                        width="16"
                                        class="mr-1"
                                        alt="" />{{ $coin == null ? 0 : $coin }} DevCoins
                                    </small>
                                    <!-- /if devcoins > 0 -->
                                </div>
                                <i class="fa fa-caret-down text-gray mx-1" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu dropdown-menu-right">
                                    <!-- if devcoins = 0-->
                                <a class="dropdown-item" href="/earncoin">
                                        Earn DevCoins
                                    </a>
                                    <!-- /if devcoins = 0-->
                                <a class="dropdown-item" href="/myprofile">
                                        My Profile
                                </a>
                                <a class="dropdown-item" href="/passchange">
                                    Change Password
                                </a>
                                <form action='{{url("/logout")}}' method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Sign Out</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            @endauth

                    @guest
                        <ul class="navbar-nav">
                            <li class="nav-item mr-sm-3 my-4 my-sm-0">
                                <a class="btn btn-primary px-4" href="{{ route('register') }}">
                                    Sign Up
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-primary px-4" href="{{ route('login') }}">
                                    Sign In
                                </a>
                            </li>
                        </ul>
            </nav>
                    @endguest
                    
                        <!-- user menu -->
                        <!--user menu mobile-->
            
                <!--/main header-->