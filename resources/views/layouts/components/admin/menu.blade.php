
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Foddy Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               @if (Auth::user()->role==1)


          <li class="nav-item">
            <a href="/cities" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Cities Controll
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/category" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                categories Controll

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/sliders" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                sliders Controll

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/foodtruck" class="nav-link">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                FoodTruck Controll
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/customers" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                customers Controll
              </p>
            </a>
          </li>

               @endif

          <li class="nav-item">
{{--             <a href="/customers" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                customers Controll
              </p>
            </a> --}}

            <a  href="{{ route('logout') }}"  class="nav-link"
     onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   <i class="fas fa-sign-out-alt"></i>
      {{ __('Logout') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>

          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
