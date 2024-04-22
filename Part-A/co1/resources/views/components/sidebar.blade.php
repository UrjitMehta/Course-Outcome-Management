<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/ddulogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 15px;">Dharamsinh Desai University</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="../../dist/img/boxed-bg.jpg" class="img-circle elevation-2" alt="User Image"> -->
          <i class="far fa-user-circle" style="font-size: 33px; color: whitesmoke"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">
          @auth
            {{ Auth::user()->name }}
          @endauth
            </a>
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
      <ul class="nav nav-pills nav-sidebar flex-column"  role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item">
            @auth
            <a href="{{ route('import') }}" class="nav-link">
                <i class="nav-icon fa fa-upload"></i>
           <p>
             Import Data
             <i class="right fas fa-angle-left"></i>
           </p>
         </a>
        </li>
        <li class="nav-item">

            <a href="{{ route('que1') }}" class="nav-link">
              <i class="nav-icon fa fa-file-text"></i>
              <p>
                Generate Que-1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
        </li>
        <li class="nav-item">

            <a href="{{ route('que2') }}" class="nav-link">
           <i class="nav-icon fa fa-file-text"></i>
           <p>
             Generate Que-2
             <i class="right fas fa-angle-left"></i>
           </p>
         </a>
        </li>
        <li class="nav-item">

         <a href="{{ route('que3') }}" class="nav-link">
           <i class="nav-icon fas fa-chart-pie"></i>
           <p>
             Generate Que-3
             <i class="right fas fa-angle-left"></i>
           </p>
         </a>
        </li>

        <li class="nav-item">

         <a href="{{ route('excel') }}" class="nav-link">
            <i class="nav-icon fa fa-file-excel-o"></i>
           <p>
             Excel
             <i class="right fas fa-angle-left"></i>
           </p>
         </a>
         @endauth
          </li>
                </ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
