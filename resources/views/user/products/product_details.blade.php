
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
            
<div class="border-bottom border-light">
    <div class="px-3 px-lg-5">
        <nav class="breadcrumb bg-white mb-0">
            <a class="breadcrumb-item" href="/member/shop">Shop</a>
            <span class="breadcrumb-item active">{{ $product->name }} </span>
        </nav>
    </div>
</div>
<!--/breadcrumb-->
<!-- Main content -->
<div class="content">
    <!--proudct details content-->
    <div>
        <div class="container py-3">
            <!--shipping confirmation success alert-->
            
</partial>
            <!--/shipping confirmation success alert-->
            <!--productsdetails-->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset("/storage/".$product->image_path)}}" class="card-img-top p-3" alt="corsair ram">
                    </div>
                </div>
                <div class="col-md-8">
                    <h2 class="mb-3">{{ $product->name }}</h2>
                    <div class="d-flex justify-content-between align-items-center">
                        <p><span class="text-muted">Price</span> <br /> <b>{{ $product->price }} Dev Coin</b></p>
                        <div class="text-right">
                            @if (Auth::user()->devcoin)
                                @if (Auth::user()->devcoin->coin >= $product->price )
                                     <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#shippingDetailsModal">Buy Now</button>

                                @else
                                    <button class="btn btn-primary" href="#" data-toggle="modal" disabled="disabled" data-target="#shippingDetailsModal">Buy Now</button>
                                @endif
                            @else
                                <button class="btn btn-primary" href="#" data-toggle="modal" disabled="disabled" data-target="#shippingDetailsModal">Buy Now</button>
                            @endif
                            
                        </div>
                    </div>
<div class="alert alert-warning" role="alert">
                            Sorry, You need <strong>28050 more Dev Coin</strong> to buy this item. Refer more people to earn Dev Coin. Your referral code: <strong>PROD001563</strong>
                        </div>
                    <!--tabs-->
                    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#productDescriptions" role="tab" aria-controls="productDescriptions" aria-selected="true">Product Descriptions</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#productFullSpecifications" role="tab" aria-controls="productFullSpecifications" aria-selected="false">Full Specifications</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="productDescriptions" role="tabpanel" aria-labelledby="home-tab">
                                <div>
                                    <strong>{{ $product->name }} </strong>
                                    <p>{{ $product->description }}</p>
                                </div>
                        </div>
                        <div class="tab-pane fade p-3" id="productFullSpecifications" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="bg-gray-light rounded-lg border">
                                <table class="table">
                                    <tbody>
                                            <tr>
                                                <th scope="row" width="40%">Key Features</th>
                                                <td>{{ $product->specifications }}</td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--tabs-->

                </div>
            </div>
            <!--/productsdetails-->
        </div>
    </div>
    <!--/proudct details content-->
</div>
<!-- /.content -->
<!-- Modal -->
<div class="modal fade" id="shippingDetailsModal" tabindex="-1" aria-labelledby="shippingDetailsModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Shipping Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="productOrderId" action="/shop/order" method="post">
                    @csrf
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JXsDInc141CjKWdYjw_9upWS0jqtHbJDEI4aOv4ZPjIdmNLkt-qXdXG66th9sbV-31mV0ID8aXory7E9lRdJXc_AG5neTu43_5sTG6gWclnIgGNeP418mPxiLhjFtSbR6NWdufOaxgtd6AjenmXgRy2JyMEf8LCoSBzzuYc4M1qj30ixuVwFOf6AiyOptaY5A" />
                    <input type="hidden" data-val="true" data-val-required="The ProductId field is required." id="ProductId" name="ProductId" value="{{$product->id}}" />
                    <div class="form-group">
                        <label for="shippingFullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" aria-describedby="shippingFullName" data-val="true" data-val-required="Please provide your full name" name="FullName" value="{{Auth::user()->name}}">
                        <br />
                        <span class="text-danger field-validation-valid" data-valmsg-for="FullName" data-valmsg-replace="true"></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="shippingMobileNumber">Phone Number</label>
                                <input type="tel" class="form-control" id="shippingMobileNumber" data-val="true" data-val-required="Please provide your phone number" name="Phone" value="{{Auth::user()->mbl_number}}">
                                <br />
                                <span class="text-danger field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="shippingEmail">Email</label>
                                <input type="email" class="form-control" data-val="true" data-val-required="Please provide your email" id="Email" name="Email" value="{{Auth::user()->email}}">
                                <br />
                                <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="shippingAddress">Address</label>
                        <input type="text" class="form-control" data-val="true" data-val-required="Please provide your address" id="Address" name="Address" value="">
                        <br />
                        <span class="text-danger field-validation-valid" data-valmsg-for="Address" data-valmsg-replace="true"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="shippingConfirmBtn">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->


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
    
   <script src="/lib/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>

<script>
    // Utility function
    function isEmptyOrSpaces(str) {
        return str === null || str.match(/^ *$/) !== null;
    }

    function addInputValidClass(field) {
        $(field).removeClass('input-validation-error');
        $(field).addClass('valid');
    }

    function addInputErrorClass(field) {
        $(field).removeClass('valid');
        $(field).addClass('input-validation-error');
    }

    // Return true if has error, otherwise false
    function checkTimeValue(time) {
        if (!time) {
            return true;
        }
        time = time.split(':');
        if (time[0] > 23 || time[1] > 59) {
            return true;
        } else if (time[0] === "" || time[1] === "") {
            return true;
        } else if (time[0][1] === "_" || time[1][1] === "_") {
            return true;
        }
        
        return false;
    }

    function validateTime(e) {
        let time = e.target.value;
        // Took logic in separate method to be used during form submission
        if (checkTimeValue(time)) {
            addInputErrorClass(e.target);
        } else {
            addInputValidClass(e.target);
        }
    }

</script>
<script>
    // Validate collection of input elements and return true if hasError, otherwise return false
    function validateInputCollection(selectionString) {
        let inputCollection = $(selectionString);
        inputCollection = Object.entries(inputCollection);
        let inputCollectionToValidate = [];
        let len = inputCollection.length;
        let hasError = false;

        inputCollection.forEach((item, index) => {
            if (index >= (len - 2)) {
                return;
            }
            inputCollectionToValidate.push(item[1]);
        });

        inputCollectionToValidate.forEach((item, index) => {
            if (isEmptyOrSpaces(item.value)) {
                hasError = true;
                $(item).removeClass('valid');
                $(item).addClass('input-validation-error');
            } else {
                $(item).removeClass('input-validation-error');
                $(item).addClass('valid');
            }
        });

        return hasError;
    }
</script>

<script>
    // For Select2 Validation
    function validateSelect2Input(defaultValue) {
        let collection = $('.select2.select2-container .selection .select2-selection .select2-selection__rendered');
        collection = Object.entries(collection);
        let hasError = false;

        collectionToValidate = [];
        collection.forEach((item, index) => {
            if (index === collection.length - 1) {
                return;
            }
            collectionToValidate.push(item);
        })

        for (let i = 0; i <= collectionToValidate.length - 2; i++) {
            if (collectionToValidate[i][1].title === defaultValue) {
                $(collectionToValidate[i]).removeClass('valid');
                $(collectionToValidate[i][1]).parent().removeClass('valid');
                $(collectionToValidate[i]).addClass('select2-validation-error'); // For image
                $(collectionToValidate[i][1]).parent().addClass('select2-validation-error'); // For border color
                hasError = true;
            } else {
                $(collectionToValidate[i]).removeClass('select2-validation-error');
                $(collectionToValidate[i][1]).parent().removeClass('select2-validation-error');
                $(collectionToValidate[i]).addClass('valid'); // For image
                $(collectionToValidate[i][1]).parent().addClass('valid'); // For border color
            }
        }

        return hasError;
    }
    
</script>

<script>
    // Script to update unobtrusiveValidation when dynamic content is added in form
    (function ($) {
        $.fn.updateValidation = function () {
            var $this = $(this);
            var form = $this.closest("form")
                .removeData("validator")
                .removeData("unobtrusiveValidation");
            $.validator.unobtrusive.parse(form);

            return $this;
        };
    })(jQuery);
</script>

<script>
    //This script contains validation for custom data annotations

    // For EnsureOneItemAttribute data annotation
    $.validator.addMethod("oneItem", function (value, element, parameters) {
        if (value === undefined || isEmptyOrSpaces(value)) {
            return false;
        }

        return true;
    });

    $.validator.unobtrusive.adapters.add("oneItem", [], function (options) {
        options.rules.oneItem = {};
        options.messages["oneItem"] = options.message;
    });

    // To ensure jquery considers empty string in Class Start or End time as invalid
    $.validator.addMethod("noEmptyString", function (value, element, parameters) {
        if (isEmptyOrSpaces(value)) {
            return false;
        }

        return true;
    });

    $.validator.unobtrusive.adapters.add("noEmptyString", [], function (options) {
        options.rules.oneItem = {};
        options.messages["noEmptyString"] = "Valid Time is required";
    });
    
    // For DateGreaterThanSevenDaysInFutureAttribute data annotation
    $.validator.addMethod("startdate", function (value, element, parameters) {
        let inputDate = new Date(value.split('/')[2], value.split('/')[1] - 1, value.split('/')[0]);
        let expectedDate = new Date();
        expectedDate.setDate(expectedDate.getDate() + 7);

        if (expectedDate.getTime() < inputDate.getTime()) {
            return true;
        }

        return false;
    });

    $.validator.unobtrusive.adapters.add("startdate", [], function (options) {
        options.rules.startdate = {};
        options.messages["startdate"] = options.message;
    });

    // For Enforce data annotation
    $.validator.addMethod("enforcetrue", function (value, element, param) {
        return element.checked;
    });

    $.validator.unobtrusive.adapters.addBool("enforcetrue");
</script>

   <script>
       $('#shippingConfirmBtn').click(function() {
           $('#productOrderId').submit();
       });
   </script>

</body>
</html>
