{{-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tracking COVID-19</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
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
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Global
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                
                  <p>Negara</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Negara
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('provinsi.index')}}" class="nav-link active">
                <p>Provinsi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('kota.index')}}" class="nav-link active">
                
                  <p>Kota</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('kecamatan.index')}}" class="nav-link active">
                
                  <p>Kecamatan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('kelurahan.index')}}" class="nav-link active">
                
                  <p>Kelurahan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('rw.index')}}" class="nav-link active">
                
                  <p>RW</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('laporan.index')}}" class="nav-link active">
                
                  <p>Laporan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a class="nav-link active" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button">
              Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>            
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside> --}}
{{-- <header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset('assets/images/manusia.png') }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"> <a href="#" class="d-block">{{ Auth::user()->name }}</a></h1>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="{{ route('home') }}"><i class="bx bx-user"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ route('provinsi.index') }}"><i class="bx-server"></i> <span>Provinsi</span></a></li>
                <li><a href="{{ route('kota.index') }}"><i class="bx bx-file-blank"></i> <span>Kota</span></a></li>
                <li><a href="{{ route('kecamatan.index') }}"><i class="bx bx-book-content"></i>Kecamatan</a></li>
                <li><a href="{{ route('kelurahan.index') }}"><i class="bx bx-server"></i>Kelurahan</a></li>
                <li><a href="{{ route('rw.index') }}"><i class="bx bx-envelope"></i>Rw</a></li>
                <li><a href="{{ route('laporan.index') }}"><i class="bx bxl-instagram"></i>Tracking</a></li>
            </ul>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        role="button">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
</header> --}}


<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('home/') ? 'c-active' : '' }}" href="{{ url('/home') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg> Dashboard</a>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ url('report') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
                </svg> Laporan</a></li>
        <li class="c-sidebar-nav-title">Data Indonesia</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/provinsi*') ? 'c-active' : '' }}"
                href="{{ url('/admin/provinsi') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur') }}"></use>
                </svg> Provinsi
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/kota*') ? 'c-active' : '' }}"
                href="{{ url('/admin/kota') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-circular') }}">
                    </use>
                </svg> Kota / Kabupaten
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/kecamatan*') ? 'c-active' : '' }}"
                href="{{ url('/admin/kecamatan') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-blur-linear') }}"></use>
                </svg> Kecamatan
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/kelurahan*') ? 'c-active' : '' }}"
                href="{{ url('/admin/kelurahan') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-clear-all') }}"></use>
                </svg> Kelurahan
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/rw*') ? 'c-active' : '' }}"
                href="{{ route('rw.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
                </svg> Rukun Warga
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link {{ request()->is('admin/kasus*') ? 'c-active' : '' }}"
                href="{{ route('laporan.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('assets/vendors/@coreui/icons/svg/free.svg#cil-3d') }}"></use>
                </svg> Kasus
            </a>
        </li>

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>
