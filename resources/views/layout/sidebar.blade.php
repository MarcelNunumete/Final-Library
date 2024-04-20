<style>
  hr{
    border: 10px;
    color: #ffffff
  }
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src={{asset('assets/img/logo40.png')}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3" >
      <span class="brand-text font-weight-light">SMKN 40</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset('assets/img/AdminLTELogo.png')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/profile" class="d-block"> {{auth()->user()->full_name}} </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{Request::is('dashboard*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class=""></i>
              </p>
            </a>
          </li>

          @can('admin-pustakawan', ['Admin', 'Pustakawan'])
          <li class="nav-item">
            <a href="/user" class="nav-link {{Request::is('user*') ? 'active' : ''}}">
              <i class="bi bi-people-fill mr-2 ml-1"></i>
              <p>
                Daftar Pengguna
                <i class=""></i>
              </p>
            </a>
          </li>
          @endcan

          @can('admin-pustakawan', ['Admin', 'Pustakawan',])
          <li class="nav-item">
            <a href="/bookadmin" class="nav-link {{Request::is('bookadmin*') ? 'active' : ''}}">
              <i class="bi bi-journal-text ml-1 mr-2"></i>
              <p>
                Daftar Buku
                <i class=""></i>
              </p>
            </a>
          </li>
          @endcan
          
          @can('admin-pustakawan', ['Admin', 'Pustakawan'])
          <li class="nav-item">
            <a href="/kategori" class="nav-link {{Request::is('kategori*') ? 'active' : ''}}">
              <i class="bi bi-journals mr-2 ml-1"></i>
              <p>
                Kategori Buku
                <i class=""></i>
              </p>
            </a>
          </li>
          @endcan

          <li class="nav-item">
            <a href="/borrow" class="nav-link {{Request::is('borrow*') ? 'active' : ''}}">
              <i class="bi bi-journal-plus mr-2 ml-1"></i>
              <p>
                Pinjam Buku
                <i class=""></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/borrowing" class="nav-link {{Request::is('borrowing*') ? 'active' : ''}}">
              <i class="bi bi-journal-plus mr-2 ml-1"></i>
              <p>
                Peminjaman
                <i class=""></i>
              </p>
            </a>
          </li>

          <hr>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>