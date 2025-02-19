    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BUTAK-PANDERMAN</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('/admin-dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/data_booking') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Booking Pending
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/booking_success') }}" class="nav-link">
              <i class="nav-icon fas fa-thumbs-up"></i>
              <p>
                Data Booking Success
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/booking_tertolak') }}" class="nav-link">
              <i class="nav-icon fas fa-thumbs-down"></i>
              <p>
                Data Booking Tertolak
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>