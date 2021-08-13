<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin - {{ env('APP_NAME') }}</title>

    <!-- Bootstrap -->
    <link href="{{url('assets/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Pe-icon-7-stroke -->
    <link href="{{url('assets/admin/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
    <!-- style css -->
    <link href="{{url('assets/admin/dist/css/stylehealth.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <!--<link href="assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
</head>
<body>
<!-- Content Wrapper -->
<div class="login-wrapper">
    <div class="container-center">
        <div class="panel panel-bd">
            <div class="panel-heading">
                <div class="view-header">
                    <h3>Admin Login</h3>
                </div>
            </div>
            <div class="panel-body">

                @include('flash')

                <form action="{{route('store')}}" id="loginForm" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <label class="control-label" for="username">Email Address</label>
                        <input type="email" placeholder="Email Address" title="Please enter you username" required="" name="email" id="username" class="form-control">
                        <span class="help-block small">Email address is required</span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Password</label>
                        <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                        <span class="help-block small">Your strong password</span>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
<!-- jQuery -->
<script src="{{url('assets/admin/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="{{url('assets/admin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>