
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
                                <img src="{{asset("storage/".$user->image_path)}}"
                                 class="img-circle mr-2"
                                 alt="Photo of " + {{ $user->name }}
                                 width="40" />
                                <div>
                                    <h6 class="mb-0 text-uppercase text-body text-truncate d-block"
                                    style="max-width: 20vw;">
                                    {{ $user->name }}
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
            


<!--breadcrumb-->
<div class="border-bottom border-light d-none d-sm-block">
    <div class="px-3 px-lg-5">
        <nav class="breadcrumb bg-white mb-0">
            <a class="breadcrumb-item" href="/Member/Home/Profile">My Profile</a>
            <span class="breadcrumb-item active">Edit</span>
        </nav>
    </div>
</div>
<!--/breadcrumb-->
<!-- Main content -->
<div class="content">
    <div class="p-3">
        <h4>Edit Profile</h4>
        <p>
            Update your bio, contact details or social media links.
        </p>
        <div class="row no-gutters">
            <div class="col-12 col-md-6">
                <form id="RegistrationForm" role="form" method="POST" enctype="multipart/form-data" action="/userprofile/{{$user->id}}">
                    @csrf
                    <input type="hidden" id="returnUrl" name="ReturnUrl" value="">
                    <div class="align-items-center d-flex my-5">
                        <div class="border border-brand-red mr-4 rounded-circle">
                                <span id="imagePlaceholder" class="fa-2x m-0 m-5 text-brand-red fa fa-camera-retro"></span>
                                <!-- if profile photo can be extracted when logged in via social media-->
                                <img class="img-fluid rounded-circle"
                                 src="{{asset("storage/".$user->image_path)}}"
                                 width="100"
                                 alt="Your image" id="myAvatar" style="display:none" />
                        </div>
                        <a href="#" id="OpenImgUpload">Change Profie Picture</a>
                        <input type="file" name="ImageFile" id="filePhoto" style="display:none" />
                    </div>
                    <div class="text-danger validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>

                    <div class="form-group">
                        <label class="label" for="Name">Your Name</label>
                        <input type="text" class="form-control" placeholder="Name" required data-val="true" data-val-length="The field Name must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Name is required" id="Name" maxlength="100" name="Name" value="{{ $user->name }}" />
                    </div>
                    <!-- email field is not required to be shown if signed up using email address-->
                    <div class="form-group">
                        <label class="label" for="Email">Email</label>
                        <input type="Email" class="form-control" placeholder="Email" readonly data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-length="The field Email must be a string with a maximum length of 100." data-val-length-max="100" data-val-required="Email is required" id="Email" maxlength="100" name="Email" value="{{ $user->email }}" />
                    </div>

                    <label class="label" for="Mobile">Mobile Number</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control select2 col-sm-12" id="MobileCountry" name="MobileCountry">
                            </select>
                        </div>
                        <div class="form-group col-sm-8" style="padding-left:0">
                            <input type="tel" class="form-control" id="mobile" placeholder="Mobile Number" data-val="true" data-val-regex="You must provide a valid phone number" data-val-regex-pattern="^[0-9]{5,15}$" data-val-required="You must provide a phone number" name="Mobile" value="{{$user->mbl_number}}">
                            <p class="text-danger my-2">
                                <span class="field-validation-valid" data-valmsg-for="Mobile" data-valmsg-replace="true"></span>
                            </p>
                        </div>
                    </div>
                    <input type="hidden" id="DialCode" name="DialCode" value="" />

                    <div class="form-group">
                        <label for="Biography">Biography</label>
                        <textarea class="form-control" rows="3" data-val="true" data-val-length="Educational Organization Name can not be longer than 255 characters" data-val-length-max="255" id="Biography" maxlength="255" name="Biography" value="{{$user->biography}}">
</textarea>
                        <span class="text-danger field-validation-valid" data-valmsg-for="Biography" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="label d-block" for="Gender">Gender</label>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" value="Male"  {{$user->gender == "Male"? "checked":""}} data-val="true" data-val-required="The Gender field is required." id="Gender" name="Gender" />
                                Male
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" value="Female" id="Gender" name="Gender" {{$user->gender == "Female"? "checked":""}} />
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label d-block">Currently</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="student" type="checkbox" data-val="true" data-val-required="The Studying field is required." name="IsStudying" value="Studying" />
                            <label class="form-check-label" for="IsStudying">Studying</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="employee" onclick="employeeFunction()" type="checkbox" data-val="true" data-val-required="The Working field is required." name="IsWorking" value="Working" />
                            <label class="form-check-label" for="IsWorking">Working</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="jobSeeker" type="checkbox" data-val="true" data-val-required="The Looking For Job field is required." name="IsLookingForJob" value="Looking_For_Job" />
                            <label class="form-check-label" for="IsLookingForJob">Looking For Job</label>

                        </div>
                    </div>
                    <div class="form-group" id="eduOrg" style="display : block;">
                        <label class="label" for="EducationalOrg">University/College/School</label>
                        <input type="text" class="form-control" name="EducationalOrg" id="EducationalOrg" placeholder="Your Latest Educational Organisation Name..." data-val="true" data-val-length="Educational Organization Name can not be longer than 255 characters" data-val-length-max="255" maxlength="255" value="{{$user->university}}" />
                    </div>
                    <div class="form-group" id="cmpName" style="display:none">
                        <label class="label" for="CompanyName">Company Name</label>
                        <input type="text"
                               class="form-control"
                               name="CompanyName"
                               id="CompanyName"
                               value="{{$user->company}}"
                               placeholder="Your are Currently Working at..." />
                    </div>

                    <div class="form-group" id="cmpDesignation" style="display:none">
                        <label for="Designation">Designation</label>
                        <input nbInput fullWidth type="text" class="form-control" placeholder="Designation" data-val="true" data-val-length="Designation can not be longer than 150 characters" data-val-length-max="512" id="Designation" maxlength="512" name="Designation" value="{{$user->designation}}" />
                        <small class="form-text text-muted">Your position/designation</small>
                        <span class="text-danger field-validation-valid" data-valmsg-for="Designation" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label for="TechSkill">Topics Your are Interested to Tech</label>
                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="e.g. AWS Basics, PHP Basics, Laravel..." id="TechSkill" name="TechSkill" value="{{$user->inerested_tpc}}" />
                        <small id="helpId" class="form-text text-muted">You can provide multiple topics.</small>
                        <span class="text-danger field-validation-valid" data-valmsg-for="TechSkill" data-valmsg-replace="true"></span>
                    </div>
                    <div class="form-group">
                        <label class="label" for="LinkdinLink">Linkedin Profile Link</label>
                        <input type="text" class="form-control" id="LinkdinLink" name="LinkdinLink" placeholder="Your Linkedin Profile Link..." data-val="true" data-val-length="Url can not be longer than 512 character. Plase shorten it if its longer" data-val-length-max="512" data-val-url="The LinkdinLink field is not a valid fully-qualified http, https, or ftp URL." maxlength="512" value="{{$user->linkdin_link}}" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="Country">Country</label>
                        <div class="row">
                            <div class="col-sm-5">
                                <select class="select2 col-sm-12" id="TimeZone" name="TimeZone">
                                <option value="UTC - 12">UTC - 12</option>
<option value="UTC - 11">UTC - 11</option>
<option value="UTC - 10">UTC - 10</option>
<option value="UTC - 9:30">UTC - 9:30</option>
<option value="UTC - 9">UTC - 9</option>
<option value="UTC - 8">UTC - 8</option>
<option value="UTC - 7">UTC - 7</option>
<option value="UTC - 6">UTC - 6</option>
<option value="UTC - 5">UTC - 5</option>
<option value="UTC - 4">UTC - 4</option>
<option value="UTC - 3">UTC - 3</option>
<option value="UTC - 2:30">UTC - 2:30</option>
<option value="UTC - 2">UTC - 2</option>
<option value="UTC - 1">UTC - 1</option>
<option value="UTC &#x2B; 0">UTC &#x2B; 0</option>
<option value="UTC &#x2B; 1">UTC &#x2B; 1</option>
<option value="UTC &#x2B; 2">UTC &#x2B; 2</option>
<option value="UTC &#x2B; 3">UTC &#x2B; 3</option>
<option value="UTC &#x2B; 4">UTC &#x2B; 4</option>
<option value="UTC &#x2B; 4:30">UTC &#x2B; 4:30</option>
<option value="UTC &#x2B; 5">UTC &#x2B; 5</option>
<option value="UTC &#x2B; 5:30">UTC &#x2B; 5:30</option>
<option value="UTC &#x2B; 5:45">UTC &#x2B; 5:45</option>
<option selected="selected" value="UTC &#x2B; 6">UTC &#x2B; 6</option>
<option value="UTC &#x2B; 6:30">UTC &#x2B; 6:30</option>
<option value="UTC &#x2B; 7">UTC &#x2B; 7</option>
<option value="UTC &#x2B; 8">UTC &#x2B; 8</option>
<option value="UTC &#x2B; 8:45">UTC &#x2B; 8:45</option>
<option value="UTC &#x2B; 9">UTC &#x2B; 9</option>
<option value="UTC &#x2B; 9:30">UTC &#x2B; 9:30</option>
<option value="UTC &#x2B; 10">UTC &#x2B; 10</option>
<option value="UTC &#x2B; 10:30">UTC &#x2B; 10:30</option>
<option value="UTC &#x2B; 11">UTC &#x2B; 11</option>
<option value="UTC &#x2B; 12">UTC &#x2B; 12</option>
<option value="UTC &#x2B; 12:45">UTC &#x2B; 12:45</option>
<option value="UTC &#x2B; 13">UTC &#x2B; 13</option>
<option value="UTC &#x2B; 14">UTC &#x2B; 14</option>
</select>
                            </div>
                            <div class="col-sm-7" style="padding-left:0">
                                <select class="select2 form-control" id="Country" name="Country">
                                <option value="AF">Afghanistan</option>
<option value="AX">&#xC5;land Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option selected="selected" value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="VG">British Virgin Islands</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="CV">Cabo Verde</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="029">Caribbean</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo (DRC)</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">C&#xF4;te d&#x2019;Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Cura&#xE7;ao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="150">Europe</option>
<option value="FK">Falkland Islands</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong SAR</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KR">Korea</option>
<option value="XK">Kosovo</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="419">Latin America</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao SAR</option>
<option value="MK">Macedonia, FYRO</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="KP">North Korea</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Authority</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn Islands</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">R&#xE9;union</option>
<option value="RO">Romania</option>
<option value="RU">Russia</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barth&#xE9;lemy</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">S&#xE3;o Tom&#xE9; and Pr&#xED;ncipe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SH">St Helena, Ascension, Tristan da Cunha</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syria</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UM">U.S. Outlying Islands</option>
<option value="VI">U.S. Virgin Islands</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="WF">Wallis and Futuna</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>
</select>
                            </div>
                        </div>
                    </div>
                  
                    {{-- <div class="form-check">
                        <label class="form-check-label" for="AgreeTerms">
                            <input type="checkbox" class="form-check-input" data-val="true" data-val-enforcetrue="You must agree to the terms" data-val-required="The AgreeTerms field is required." id="AgreeTerms" name="AgreeTerms" value="true" />
                            I agree to
                            <a target="_blank" href="/Terms/Details">terms and conditions</a>
                            of DevSkill
                        </label>
                    </div> --}}
                    <hr />
                    <button type="submit" class="btn btn-primary">
                        Done
                    </button>
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JXsDInc141CjKWdYjw_9upfSj9OmwwcyVB_TvXwHE6NfLGVh8oi2ABaxiV9IpMGHhCbTqeCFbo6EOEaYmLXDjEnzoqin7nvVBUlyUCnjOv0Vfb_PfBjXz-XzzcU0qsP6LI_Cui6t3tWVSoXkVrtIqTeKRcrts1TSASoz-eLyekWBOyPvgzZ3y9DraSkQ-ndfw" /><input name="IsStudying" type="hidden" value="false" /><input name="IsWorking" type="hidden" value="false" /><input name="IsLookingForJob" type="hidden" value="false" /><input name="AgreeTerms" type="hidden" value="false" /></form>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->

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
    <script src="/site/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/site/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/site/js/adminlte.min.js"></script>
    <!-- InputMask -->
    <script src="/site/js/moment.min.js"></script>
    <script src="/site/js/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="/site/js/daterangepicker.js"></script>
    <!-- Select2 -->
    <script src="/site/js/select2.full.min.js"></script>
    <!-- Left menu activate -->
    <script src="/site/js/left-menu-activate.js"></script>
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
    
<script src="/site/js/site.js"></script>
<script src="/site/js/jquery.validate.min.js"></script>
<script src="/site/js/jquery.validate.unobtrusive.min.js"></script>


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

<script src="/site/js/memberValidation.js"></script>
<script src="/site/js/countryWithFlag.js"></script>
<script>
    $(".select2").select2({});
    $(function () {
        bindProfilePictureUploader('imagePlaceholder',
            'OpenImgUpload',
            'filePhoto',
            'myAvatar');
    });
    function employeeFunction() {
        var checkBox = document.getElementById("employee");
        var cmp = document.getElementById("cmpName");
        if (checkBox.checked == true) {
            cmp.style.display = "block";
            cmpDesignation.style.display = "block";
        }
        else {
            cmp.style.display = "none";
            cmpDesignation.style.display = "none";
        }
    };
</script>

</body>
</html>
