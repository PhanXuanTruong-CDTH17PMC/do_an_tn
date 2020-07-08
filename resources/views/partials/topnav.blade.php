<header id="topnav">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>

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
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" role="button" >
                            <span class="pro-user-name ml-1">
                                
                            </span>
                        </a>
                    </li>
                    <li class="dropdown notification-list">
                        <a  class="nav-link dropdown-toggle nav-user mr-0 waves-effect">
                            Đăng xuất
                        </a>
                    </li>
                
                    <li class="dropdown notification-list">
                        <a  href="/log-in" class="nav-link dropdown-toggle nav-user mr-0 waves-effect">
                            Đăng nhập
                        </a>
                    </li>
                
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a  class="logo text-center">
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" height="52">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="52">
                    </span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    
                    <li class="has-submenu">
                            <a href="/danh-sach-nhan-vien">
                                Nhân viên
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a >
                                Căn hộ
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a >
                                Cư dân
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a >
                                Phương tiện
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a >
                                Dịch vụ
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a >
                                Hóa đơn
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a >
                                Thông báo
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a >
                                Tin tức
                            </a>
                        </li>
                        
                    
                </ul>
                <!-- End navigation menu -->
                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header>