< x-layouts.app>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper"
        data-theme="light"
        data-layout="vertical"
        data-navbarbg="skin6"
        data-sidebartype="full"
        data-sidebar-position="fixed"
        data-header-position="fixed"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar"
            data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-lg">
                <div class="navbar-header"
                    data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">

                            Ingrada

                            <img src="{{ asset( 'assets/images/favicon.jpg')  }}"
                                width="55"
                                height="44"
                                alt="icon"
                                class="img-fluid">
                            Creative
                        </a>

                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light"
                        href="javascript:void(0)"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse"
                    id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left me-auto ms-3 ps-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative"
                                href="javascript:void(0)"
                                id="bell"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell"
                                        class="svg-icon"></i></span>
                                <span class="badge text-bg-warning notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay"
                                                        class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar"
                                                        class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings"
                                                        class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box"
                                                        class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark"
                                            href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="settings"
                                    class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item"
                                    href="#">Action</a>
                                <a class="dropdown-item"
                                    href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                    href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link"
                                href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                        <option value="1">AB</option>
                                        <option value="2">AK</option>
                                        <option value="3">BE</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                                href="javascript:void(0)"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <img src="../assets/images/users/profile-pic.jpg"
                                    alt="user"
                                    class="rounded-circle"
                                    width="40">
                                <span class="ms-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">Jason Doe</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item"
                                    href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon me-2 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item"
                                    href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon me-2 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item"
                                    href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon me-2 ms-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                    href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon me-2 ms-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"
                                    href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon me-2 ms-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar"
            data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar"
                data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="index.html"
                                aria-expanded="false"><i data-feather="home"
                                    class="feather-icon"></i><span class="hide-menu">HOME</span></a></li>
                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link"
                                href="Employee.html"
                                aria-expanded="false"><i data-feather="user"
                                    class="feather-icon"></i><span class="hide-menu">EMPLOYEE
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link "
                                href="permission.html"
                                aria-expanded="false"><i data-feather="tag"
                                    class="feather-icon"></i><span class="hide-menu">PERMISSION </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="app-calendar.html"
                                aria-expanded="false"><i data-feather="calendar"
                                    class="feather-icon"></i><span class="hide-menu">Calendar</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow"
                                href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text"
                                    class="feather-icon"></i><span class="hide-menu">REPORTS </span></a>
                            <ul aria-expanded="false"
                                class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="DailyReport.html"
                                        class="sidebar-link"><span class="hide-menu"> DAILY
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="monthlyReport.html"
                                        class="sidebar-link"><span class="hide-menu"> MONTHLY
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="AnnulyReport.html"
                                        class="sidebar-link"><span class="hide-menu"> ANNUAL
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow"
                                href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="trello"
                                    class="feather-icon"></i><span class="hide-menu">RULE MANGMENT </span></a>
                            <ul aria-expanded="false"
                                class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="form-inputs.html"
                                        class="sidebar-link"><span class="hide-menu"> CLASS TASK
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-input-grid.html"
                                        class="sidebar-link"><span class="hide-menu"> CLASS DESIGNER
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-checkbox-radio.html"
                                        class="sidebar-link"><span class="hide-menu">WORKING TASK
                                        </span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link "
                                href="authentication-login1.html"
                                aria-expanded="false"><i data-feather="log-out"
                                    class="feather-icon"></i><span class="hide-menu">LOGOUT </span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Luck Today!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">sunday</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-end">
                            <select
                                class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 23</option>
                                <option value="1">July 23</option>
                                <option value="2">Jun 23</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">236</h2>

                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Number Of
                                            Designer
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">200</h2>

                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Number Of
                                            content creator
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">1538</h2>

                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Number Of
                                            order Today
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="tag"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Projects</h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="file"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Demand for each type of design</h4>
                                <div id="campaign-v2"
                                    class="mt-2"
                                    style="height:283px; width:100%;"></div>

                                <ul class="list-style-none mb-0">
                                    <li>
                                        <i class="fas fa-circle text-dark font-10 me-2"></i>
                                        <span class="text-muted">Advertising and social media </span>

                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-dark font-10 me-2"></i>
                                        <span class="text-muted">Logo and visual identity</span>

                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-dark font-10 me-2"></i>
                                        <span class="text-muted">Covers of books and magazines</span>

                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-dark font-10 me-2"></i>
                                        <span class="text-muted">Drawing of products and packages</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Demand for each region</h4>
                                <div class="net-income mt-4 position-relative"
                                    style="height:294px;"></div>
                                <ul class="list-inline text-center mt-5 mb-2">

                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">The most requested designers</h4>
                                <div id="chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- *************************************************************** -->
                    <!-- End Sales Charts Section -->
                    <!-- *************************************************************** -->
                    <!-- *************************************************************** -->
                    <!-- Start Location and Earnings Charts Section -->
                    <!-- *************************************************************** -->


                    <!-- *************************************************************** -->
                    <!-- End Location and Earnings Charts Section -->
                    <!-- *************************************************************** -->
                    <!-- *************************************************************** -->
                    <!-- Start Top Leader Table -->
                    <!-- *************************************************************** -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header bg-white">
                                    <div class="card-title">


                                        Designer Reviews
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table no-wrap v-middle mb-0">

                                            <thead>
                                                <tr class="border-0">
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Designer
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Email
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Projrct
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">Budget
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border-top-0 px-2 py-4">
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="me-3"><img
                                                                    src="../assets/images/users/widget-table-pic1.jpg"
                                                                    alt="user"
                                                                    class="rounded-circle"
                                                                    width="45"
                                                                    height="45" /></div>
                                                            <div class="">
                                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                    Hanna
                                                                    Gover</h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                                        bb98@gmail.com

                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4"> 50

                                                    </td>

                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-2 py-4">
                                                        <div class="d-flex no-block align-items-center">

                                                            <div class="me-3"><img
                                                                    src="../assets/images/users/widget-table-pic2.jpg"
                                                                    alt="user"
                                                                    class="rounded-circle"
                                                                    width="45"
                                                                    height="45" /></div>
                                                            <div class="">
                                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                    Daniel
                                                                    Kristeen
                                                                </h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                                        bb98@gmail.com

                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4"> 45

                                                    </td>

                                                    <td class="font-weight-medium text-dark px-2 py-4">
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-2 py-4">
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="me-3"><img
                                                                    src="../assets/images/users/widget-table-pic3.jpg"
                                                                    alt="user"
                                                                    class="rounded-circle"
                                                                    width="45"
                                                                    height="45" /></div>
                                                            <div class="">
                                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                    Julian
                                                                    Josephs
                                                                </h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                                        bb98@gmail.com

                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4"> 50

                                                    </td>
                                                    <td class="font-weight-medium text-dark px-2 py-4">
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-bottom-0 px-2 py-4">
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="me-3"><img
                                                                    src="../assets/images/users/widget-table-pic4.jpg"
                                                                    alt="user"
                                                                    class="rounded-circle"
                                                                    width="45"
                                                                    height="45" /></div>
                                                            <div class="">
                                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">
                                                                    Jan
                                                                    Petrovic
                                                                </h5>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                                        bb98@gmail.com

                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4"> 50

                                                    </td>

                                                    <td class="border-bottom-0 font-weight-medium text-dark px-2 py-4">
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                        <i data-feather="star"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- *************************************************************** -->
                    <!-- End Top Leader Table -->
                    <!-- *************************************************************** -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->

        </x-layouts.app>