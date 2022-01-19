  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('bootstrap/dist/img/musicLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; color: white;">
      <span class="brand-text font-weight-light">SPK Studio Musik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('bootstrap/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('user/'.Auth::user()->id.'/edit')}}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          @if (Auth::check() && Auth::user()->level == ('admin'))
          <li class="nav-item">
            @if (!empty($halaman) && $halaman=='Dashboard')
            <a href="{{url('dashboard')}}" class="nav-link active">
            @else
            <a href="{{url('dashboard')}}" class="nav-link">
            @endif
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          @endif

          @if (Auth::check() && Auth::user()->level != ('admin'))
          {{-- booking --}}
          @if (!empty($halaman) && $halaman=='Data Booking' || $halaman=='Tambah Data Booking' || $halaman=='Ubah Data Booking')
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
          @else
          <li class="nav-item">
            <a href="#" class="nav-link">
          @endif
              <i class="nav-icon fas fa-calendar-day"></i>
              <p>
                Booking
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                @if (!empty($halaman) && $halaman=='Data Booking')
                <a href="{{url('booking')}}" class="nav-link active">
                @else
                <a href="{{url('booking')}}" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Booking</p>
                </a>
              </li>
              <li class="nav-item">
                @if (!empty($halaman) && $halaman=='Tambah Data Booking')
                <a href="{{url('/booking/create')}}" class="nav-link active">
                @else
                <a href="{{url('/booking/create')}}" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Booking</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          {{-- kalender --}}
          {{-- <li class="nav-item">
            @if (!empty($halaman) && $halaman=='Kalender Booking')
            <a href="pages/calendar.html" class="nav-link active">
            @else
            <a href="pages/calendar.html" class="nav-link">
            @endif
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li> --}}
          @if (Auth::check() && Auth::user()->level == ('admin'))
          {{-- <li class="nav-header">Admin Section</li> --}}
          {{-- studio --}}
          @if (!empty($halaman) && $halaman=='Data Studio' || $halaman=='Tambah Data Studio' || $halaman=='Ubah Data Studio')
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
          @else
          <li class="nav-item">
            <a href="#" class="nav-link">
          @endif
              <i class="nav-icon fas fa-home"></i>
              <p>
                Studio Musik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                @if (!empty($halaman) && $halaman=='Data Studio')
                <a href="{{url('studio')}}" class="nav-link active">
                @else
                <a href="{{url('studio')}}" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Studio</p>
                </a>
              </li>
              <li class="nav-item">
                @if (!empty($halaman) && $halaman=='Tambah Data Studio')
                <a href="{{url('/studio/create')}}" class="nav-link active">
                @else
                <a href="{{url('/studio/create')}}" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Studio</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- bobot  --}}
          <li class="nav-item">
            @if (!empty($halaman) && $halaman=='Kriteria')
            <a href="{{url('bobot')}}" class="nav-link active">
            @else
            <a href="{{url('bobot')}}" class="nav-link">
            @endif
              <i class="nav-icon fas fa-table"></i>
              <p>
                Kriteria
              </p>
            </a>
          </li>

          {{-- ahp --}}
          <li class="nav-item">
            @if (!empty($halaman) && $halaman=='Perhitungan AHP')
            <a href="{{url('perhitungan')}}" class="nav-link active">
            @else
            <a href="{{url('perhitungan')}}" class="nav-link">
            @endif
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                Proses AHP
              </p>
            </a>
          </li>

          {{-- user --}}
          @if (!empty($halaman) && $halaman=='Data User' || $halaman=='Tambah Data User' || $halaman=='Ubah Data User')
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
          @else
          <li class="nav-item">
            <a href="#" class="nav-link">
          @endif
              <i class="nav-icon fas fa-user"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                @if (!empty($halaman) && $halaman=='Data User')
                <a href="{{url('user')}}" class="nav-link active">
                @else
                <a href="{{url('user')}}" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>List User</p>
                </a>
              </li>
              <li class="nav-item">
                @if (!empty($halaman) && $halaman=='Tambah Data User')
                <a href="{{url('/user/create')}}" class="nav-link active">
                @else
                <a href="{{url('/user/create')}}" class="nav-link">
                @endif
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah User</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>