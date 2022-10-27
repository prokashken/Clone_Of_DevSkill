
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
                    <a class="nav-link text-body text-lg font-weight-bold" href="/Member/Course">COURSES</a>
                </li>
                <li class="nav-item d-sm-inline-block">
                    <a class="nav-link text-body active text-lg font-weight-bold" href="/Webinar">WEBINAR</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link text-body text-lg font-weight-bold" href="/Member/Blog">BLOG</a>
                </li>
                <li class="nav-item d-sm-inline-block">
                    <a class="nav-link text-body text-lg font-weight-bold" href="/Member/Faq">FAQ</a>
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
                            <i class="dropdown">
                              <button type="button" class="btn btn-link dropdown-toggle dropdown-menu-right"  data-toggle="dropdown">
                                
                              </button>
                              <div class="dropdown-menu ">
                                <a class="dropdown-item" href="#">Earn DevCoins</a>
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item-text" href="#">Change Password</a>
                                <a class="dropdown-item-text text-danger" href="#">Sign Out</a>
                                {{-- <span class="dropdown-item-text"></span> --}}
                              </div>
                            </i>
                        </li>
                 
                                                   
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
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            

<div class="wrapper">
    <div class="content">
        <div class="p-3">
          <h3>{{ $course->title }} - {{ $course->tag }} Batch: {{ $course->batch }} </h3>
                <div class="row no-gutters">
                    <div class="col-12 col-md-6">
                      <form method="post" action="/submitcmnt/{{$course->id}}">
                        @csrf
                       <input type="hidden" data-val="true" data-val-required="The CourseRegistrationId field is required." id="CourseRegistrationId" name="CourseRegistrationId" value="67efd5df-6510-49f4-5919-08daa62634f1" />
                  <div class="form-group">
                    <label for="CourseFeedback" class="label">Feedback</label>
                    {{-- @foreach (App\Models\Comment::where('user_id',Auth::id())->get() as $item) --}}
                        <textarea type="text" class="form-control" placeholder="Write your feedback within 1,000 characters." style="height:250px; width: 500px" data-val="true" data-val-maxlength="Feedback can not be greater then 1000 characters" data-val-maxlength-max="1000" data-val-required="Feedback can not be empty" id="CourseFeedback" maxlength="1000" name="CourseFeedback">@foreach (App\Models\Comment::where('user_id',Auth::id())->where('commentable_id',$course->id)->get() as $item)
                           {{$item->details;}}
                        @endforeach
                        </textarea>
                    {{-- @endforeach --}}
                 
                 <span class="text-danger field-validation-valid" data-valmsg-for="CourseFeedback" data-valmsg-replace="true"></span>
                  </div>
                <button type="submit" class="btn btn-primary">
                Submit Feedback
                </button>
                <button class="btn btn-outline btn-outline-secondary" formaction="/Member/Course/MyCourses">
                  Cancel
                </button>
              <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JXsDInc141CjKWdYjw_9up_DbPeZPBg2pxhk8i62wLPuQobZiZFYHIocUJPIAafNALGGLhDFrNcSwMtuNay5DUPbySYGhNq3P6ncycDMNEekPVlbB94D3NfhbLu9BCeH5t_TulrRtasQ4LgFElelOI14vh9kHrLj47VUPRVPWvxLGqf05Ysmr4aq4Gt6bxuNg" /></form>
            </div>
                </div>
        </div>
    </div>
</div>
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer border-top border-light bg-white">
            <div class="d-flex flex-row">
                <div>© 2022 Dev Skill</div>
                <div class="text-right col">
                    <a href="https://www.facebook.com/groups/devskillbd">
                        <img width="100"
                             src="/img/FindUs-FB-RGB.svg"
                             alt="Facebook Page" />
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.min.js"></script>
    <!-- InputMask -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Select2 -->
    <script src="/plugins/select2/js/select2.full.min.js"></script>
    <!-- Left menu activate -->
    <script src="/js/member/left-menu-activate.js"></script>
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            }; if (!f._fbq) f._fbq = n;
            n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
        }(window,
        document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1400808416648408', {
            em: 'insert_email_variable,'
        });
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=1400808416648408&ev=PageView&noscript=1" />
    </noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    <script type="text/javascript">
        // Google analytics code
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-23675202-5', 'auto');
        ga('send', 'pageview');
        // End of Google analytics code
    </script>
    
</body>
</html>
