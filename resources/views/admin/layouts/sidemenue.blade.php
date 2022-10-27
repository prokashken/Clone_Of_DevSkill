
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ url('/orginalAdmin') }}" class="nav-link {{ request()->is('orginalAdmin*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/orginaladmin/courses') }}" class="nav-link {{ request()->is('/orginaladmin/course*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Courses
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/products') }}" class="nav-link {{ request()->is('products*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Products
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/adminWebinars') }}" class="nav-link {{ request()->is('adminWebinars*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Webinar
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/Blogs') }}" class="nav-link {{ request()->is('Blogs*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Blogs
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/Adfaq') }}" class="nav-link {{ request()->is('Adfaq*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Faqs
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/Adorder') }}" class="nav-link {{ request()->is('Adorder*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Orders
                  </p>
                </a>
              </li>
        </ul>
      </nav>