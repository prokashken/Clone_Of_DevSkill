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
            <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
            
    <!-- new -->
            {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> --}}
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css" rel="stylesheet" />
            
    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed mb-0">
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

                        <!-- Right navbar links -->
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
                                    <small>
                                            <img src="/site/img/ic_devcoin.svg"
                                            width="16"
                                            class="mr-1"
                                            alt="" />0 DevCoins
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
                                                    
                                {{-- <li class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Dropdown button
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Link 1</a>
                                    <a class="dropdown-item" href="#">Link 2</a>
                                    <a class="dropdown-item-text" href="#">Text Link</a>
                                    <span class="dropdown-item-text">Just Text</span>
                                </div>
                                </li> --}}
                            
                            </li>     
                    </ul> 
                </nav>
    {{-- @include('site.layouts.header') --}}

                
                
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-light-primary border-right border-light">
                <!-- Brand Logo -->
                <a href="/" class="brand-link logo-switch border-light">
                    <img src="/site/img/img_logo_ds_sm.svg"
                        alt="DevSkill"
                        class="brand-image-xl logo-xs" />
                    <img src="/site/img/logo.png"
                        alt="DevSkill"
                        class="brand-image-xs logo-xl" />
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy leftMenu"
                            data-widget="treeview"
                            role="menu"
                            data-accordion="false">
                            <li class="nav-item leftMenuHome">
                                <a class="nav-link" href="{{url('/home')}}">
                                    <i class="nav-icon far fa-newspaper"></i>
                                    <p>
                                        Home
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item leftMenuCourse">
                                <a class="nav-link" href="{{url('/mycourse')}}">
                                    <i class="nav-icon fas fa-graduation-cap"></i>
                                    <p>
                                        My Courses
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item leftMenuProfile">
                                <a class="nav-link" href="{{url('/myprofile')}}">
                                    <i class="nav-icon fas fa-user-circle"></i>
                                    <p>
                                        Profile
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item leftMenuDevCoin">
                                <a class="nav-link" href="{{url('/mydevcoin')}}">
                                    <img src="/site/img/ic_devcoin.svg" class="nav-icon d-inline-block" width="26" alt="DevCoins" />
                                    <!-- <i class="nav-icon fas fa-user-astronaut"></i> -->
                                    <p>
                                        Dev Coins
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item leftMenuDevShop">
                                <a class="nav-link" href="{{url('/mydevshop')}}">
                                    <img src="/site/img/devshop_menu_icon.png" class="nav-icon d-inline-block" width="26" alt="DevShop" />
                                    <p>
                                        Dev Shop
                                    </p>
                                </a>
                            </li>
                            @if (Auth::user()->instructor == true)
                                <li class="nav-item leftMenuDevShop">
                                    <a class="nav-link" href="{{url('/admincourses')}}">
                                        <img src="/site/img/devshop_menu_icon.png" class="nav-icon d-inline-block" width="26" alt="DevShop" />
                                        <p>
                                            Create Course
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item leftMenuDevShop">
                                    <a class="nav-link" href="{{url('/InsBlogs')}}">
                                        <img src="/site/img/devshop_menu_icon.png" class="nav-icon d-inline-block" width="26" alt="DevShop" />
                                        <p>
                                            Create Blogs
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item leftMenuDevShop">
                                    <a class="nav-link" href="{{url('/InsWebinars')}}">
                                        <img src="/site/img/devshop_menu_icon.png" class="nav-icon d-inline-block" width="26" alt="DevShop" />
                                        <p>
                                            Create Webinal
                                        </p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>

                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>