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
