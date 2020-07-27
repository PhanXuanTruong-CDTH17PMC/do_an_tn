<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>
        @section('title')
            Homes
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<header >
    <div class="navbar-custom" style="background-color: green">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">
                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="dropdown notification-list">
                    <a href="/quan-tri-vien/dang-nhap" class="nav-link dropdown-toggle nav-user mr-0 waves-effect" style=" color: white">
                        Đăng xuất
                    </a>
                </li>
            
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a  class="logo text-center">
                    <h1 style="color:White">PT Home's</h1>
                </a>
            </div>
              <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                <div class="font-icon-detail">
                  <i class="now-ui-icons business_briefcase-24"></i>
                </div>  
        </div>
    </div>
</header>

    <body>

        <!-- Navigation Bar-->
       
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">
               @yield('main-content')
            </div>
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        @include('partials.topnav')
        <!-- end Footer -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        @yield('js')

        <!-- App js-->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

         <!--Sweet Alert2 js-->
         <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
         
    </body>
</html>