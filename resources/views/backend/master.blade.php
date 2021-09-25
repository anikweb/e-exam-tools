<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> @if(Route::is('dashboard')) Dashboard @elseif(Route::is('general-settings.index')) General Settings @endif | {{ generalSettings()->site_title }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">


  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/toastr/toastr.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('backend/image/general_settings').'/'.generalSettings()->icon }}" type="image/x-icon">
    @yield('internal_style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('backend/image/general_settings').'/'.generalSettings()->logo }}" alt="{{ generalSettings()->logo }}"  width="200px">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
            </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                    </div>
                </form>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('dashboard') }}" class="brand-link">
            <img src="{{ asset('backend/image/general_settings').'/'.generalSettings()->icon }}" alt="{{ generalSettings()->icon }}" class="brand-image img-circle" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ generalSettings()->site_title }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                            Questionnaires
                            <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('questionnaire.create') }}" class="nav-link">
                                    <i class="fa fa-plus-circle nav-icon"></i>
                                    <p>Create Questionnaire</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('questionnaire.index') }}" class="nav-link">
                                    <i class="fa fa-book nav-icon"></i>
                                    <p>Questionnaire</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-wrench"></i>
                            <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('general-settings.index') }}" class="nav-link">
                                    <i class="far text-primary fa-circle nav-icon"></i>
                                    <p>General Settings</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- Logout  --}}
                    <li class="nav-item mt-auto">
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon text-danger fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            </form>
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
        <!-- Content Header (Page header) -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy;{{ date('Y') .'-'. (date('y')+1) }} <span class="text-info">E-Exams Tool</span>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <strong>Version:</strong> beta
            </div>
            <span>Developed By:</span>
            <a target="_blank" href="https://aniknandi.com">Anik Kumar Nandi</a>.</strong>
        </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
@yield('footer_js')
</body>
</html>
