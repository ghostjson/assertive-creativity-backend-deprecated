<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Assertive Creativity</title>

    <!--Data tables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/ju/dt-1.10.20/r-2.2.3/datatables.min.css"/

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/7d40304bdb.js" crossorigin="anonymous"></script>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Visit Site</a>
                </li>

            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

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
                <li class="nav-item">

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: 1; padding: 0px; width: 90%;margin: 0px;">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://i.pravatar.cc/250?u=a" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu #INSERT HERE -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


                        <li class="nav-item">
                            <a href="/" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link  {{ (request()->is('/pages')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Pages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/pages/home" class="nav-link  {{ (request()->is('/pages/home')) ? 'active' : '' }}">
                                    <i class="far fa-file"></i>
                                        <p>Home</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pages/about" class="nav-link {{ (request()->is('/pages/about')) ? 'active' : '' }}">
                                    <i class="far fa-file"></i>
                                        <p>About</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <!-- Forms Menu Section -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link  {{ (request()->is('/form')) ? 'active' : '' }}">
                                <i class="fa fa-wpforms" aria-hidden="true"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/form/forms" class="nav-link  {{ (request()->is('/form/forms')) ? 'active' : '' }}">
                                        <i class="far fa-file"></i>
                                        <p>Forms</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/form/form-creator" class="nav-link {{ (request()->is('/form/form-creator')) ? 'active' : '' }}">
                                        <i class="far fa-file"></i>
                                        <p>Form Creator</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <!-- /Forms Menu Section -->

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content  #INSERT HERE -->
            <section class="content">
                <div class="container-fluid">


                    @yield('content')


                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="assertivecreativity.com">assertivecreativity</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.0.5
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }} "></script>
    <!-- Data Tables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/ju/dt-1.10.20/r-2.2.3/datatables.min.js"></script>

    <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>



    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('js/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('js/raphael.min.js') }}"></script>



    @yield('scripts')


</body>

</html>
