<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $page_title }} - {{ env('APP_NAME') }}</title>

    <!-- jquery-ui css -->
    <link href="{{url('assets/admin/plugins/jquery-ui-1.12.1/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap -->
    <link href="{{url('assets/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Lobipanel css -->
    <link href="{{url('assets/admin/plugins/lobipanel/lobipanel.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Pace css -->
    <link href="{{url('assets/admin/plugins/pace/flash.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link href="{{url('assets/admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Pe-icon -->
    <link href="{{url('assets/admin/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Themify icons -->
    <link href="{{url('assets/admin/themify-icons/themify-icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- End Global Mandatory Style
    =====================================================================-->
    <!-- Start page Label Plugins
    =====================================================================-->
    <!-- Toastr css -->
    <link href="{{url('assets/admin/plugins/toastr/toastr.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Emojionearea -->
    <link href="{{url('assets/admin/plugins/emojionearea/emojionearea.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Monthly css -->
    <link href="{{url('assets/admin/plugins/monthly/monthly.css')}}" rel="stylesheet" type="text/css"/>
    <!-- End page Label Plugins
    =====================================================================-->
    <!-- Start Theme Layout Style
    =====================================================================-->
    <!-- Theme style -->
    <link href="{{url('assets/admin/dist/css/stylehealth.min.css')}}" rel="stylesheet" type="text/css"/>
    <!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
    <!-- End Theme Layout Style
    =====================================================================-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>
<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <a href="{{url('admin/dashboard')}}" class="logo"> <!-- Logo -->
            <span class="logo-mini">
                        <!--<b>A</b>H-admin-->
                        <img src="{{url('assets/admin/dist/img/mini-logo.png')}}" alt="">
                    </span>
            <span class="logo-lg">
                        <!--<b>Admin</b>H-admin-->
                        <img src="{{url('assets/admin/dist/img/logo.png')}}" alt="">
                    </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top ">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-tasks"></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Orders -->
                    <li class="dropdown dropdown-user admin-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-image">
                                <img src="{{url('assets/admin/dist/img/avatar4.png')}}" class="img-circle" height="40" width="40" alt="User Image">
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('admin/logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="image pull-left">
                    <img src="{{url('assets/admin/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="info">
                    <h4>Welcome</h4>
                    <p>{{ ucwords(auth()->user()->full_name) }}</p>
                </div>
            </div>

            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <li>
                    <a href="{{url('admin/dashboard')}}"><i class="fa fa-home"></i><span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/staff')}}"><i class="fa fa-hospital-o"></i><span>All Staff</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/add-role')}}"><i class="fa fa-plus"></i><span>Add New Role</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/role')}}"><i class="fa fa-hospital-o"></i><span>All Staff Role</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/add-staff')}}"><i class="fa fa-plus"></i><span>Add New Staff</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/add-student')}}"><i class="fa fa-plus"></i><span>Add New Student</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('admin/logout')}}">
                        <i class="fa fa-sign-out"></i><span> Logout</span>
                    </a>
                </li>

            </ul>
        </div> <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-title">
                <h1>{{$page_title}}</h1>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            @include('flash')
            <div class="row">
                @stack('content')
            </div>
        </section> <!-- /.content -->

    </div> <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2020-2021 <a href="#">{{ env('APP_NAME') }}</a>.</strong> All rights reserved.
    </footer>
</div> <!-- ./wrapper -->
<!-- ./wrapper -->
<!-- Start Core Plugins
=====================================================================-->
<!-- jQuery -->


<!-- jQuery -->
<script src="{{url('assets/admin/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="{{url('assets/admin/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{url('assets/admin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- lobipanel -->
<script src="{{url('assets/admin/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
<!-- Pace js -->
<script src="{{url('assets/admin/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{url('assets/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{url('assets/admin/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
<!-- Hadmin frame -->
<script src="{{url('assets/admin/dist/js/custom1.js')}}" type="text/javascript"></script>
<!-- End Core Plugins
=====================================================================-->
<!-- Start Page Lavel Plugins
=====================================================================-->
<!-- Toastr js -->
<script src="{{url('assets/admin/plugins/toastr/toastr.min.js')}}" type="text/javascript"></script>
<!-- Sparkline js -->
<script src="{{url('assets/admin/plugins/sparkline/sparkline.min.js')}}" type="text/javascript"></script>
<!-- Data maps js -->
<script src="{{url('assets/admin/plugins/datamaps/d3.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/plugins/datamaps/topojson.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/plugins/datamaps/datamaps.all.min.js')}}" type="text/javascript"></script>
<!-- Counter js -->
<script src="{{url('assets/admin/plugins/counterup/waypoints.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<!-- ChartJs JavaScript -->
<script src="{{url('assets/admin/plugins/chartJs/Chart.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/plugins/emojionearea/emojionearea.min.js')}}" type="text/javascript"></script>
<!-- Monthly js -->
<script src="{{url('assets/admin/plugins/monthly/monthly.js')}}" type="text/javascript"></script>
<!-- Data maps -->
<script src="{{url('assets/admin/plugins/datamaps/d3.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/plugins/datamaps/topojson.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/admin/plugins/datamaps/datamaps.all.min.js')}}" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<!-- End Page Lavel Plugins
=====================================================================-->
<!-- Start Theme label Script
=====================================================================-->
<!-- Dashboard js -->
<script src="{{url('assets/admin/dist/js/custom.js')}}" type="text/javascript"></script>
<script>
    $('#example1').DataTable();
</script>
</body>
</html>