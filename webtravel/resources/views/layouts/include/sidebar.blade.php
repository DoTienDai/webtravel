<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('admin') }}" class="brand-link">
    <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"  >AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
      @if(Auth::check())
    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
@else
    <a href="{{ route('login') }}" class="d-block">Đăng nhập</a>
@endif
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
       
        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Thong ke
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li>
     <!-- danhmuc -->
        <li class="nav-item {{ Request::segment(1)=='categories' ? 'menu-is-opening menu-open': '' }} ">
          <a href="{{ route('categories.index') }}" class="nav-link">
            <i class="nav-icon fas fa-folder"></i>
            <p>
              Categories
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href=" {{ route('categories.create') }}" class="nav-link">
              <i class="fa-solid fa-gear"></i>
                <p>Create Category</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href=" {{ route('categories.index') }}" class="nav-link">
              <i class="fa-solid fa-gear"></i>
                <p>Danh sach Category</p>
              </a>
            </li>
          </ul>
        </li>
     
      <!-- tour -->
      <li class="nav-item {{ Request::segment(2)=='tour' ? 'menu-is-opening menu-open': '' }} ">
          <a href="{{ route('tours.index') }}" class="nav-link">
            <i class="nav-icon fas fa-folder"></i>
            <p>
              Tour
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href=" {{ route('tours.create') }}" class="nav-link">
              <i class="fa-solid fa-gear"></i>
                <p>Create Tour</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href=" {{ route('tours.index') }}" class="nav-link">
              <i class="fa-solid fa-gear"></i>
                <p>List Tour</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>