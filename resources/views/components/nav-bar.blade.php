<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!--==============================================================-->
<header class="topbar"
    data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-lg">
        <div class="navbar-header"
            data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-lg-none"
                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
            <x-logo href="/" />
            <!--==============================================================-->
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
                                        <div class="btn btn-danger rounded-circle btn-circle"><i data-feather="airplay"
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
                                            <span class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                a reminder that you have event</span>
                                            <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                        class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-info rounded-circle btn-circle"><i data-feather="settings"
                                                class="text-white"></i></span>
                                        <div class="w-75 d-inline-block v-middle ps-2">
                                            <h6 class="message-title mb-0 mt-1">Settings</h6>
                                            <span class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                can customize this template
                                                as you want</span>
                                            <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)"
                                        class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                        <span class="btn btn-primary rounded-circle btn-circle"><i data-feather="box"
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

            </ul>

            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
                <!-- ============================================================== -->

                <!-- =================    ============================================= -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="javascript:void(0)"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <img src={{ asset( auth()->user()->avatar ?? 'assets\images\users\1.jpg') }}
                            alt="user"
                            class="rounded-circle"
                            width="40">
                        <span class="ms-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark"> {{auth()->user()->fullname}}</span> <i data-feather="chevron-down"
                                class="svg-icon"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item"
                            href="{{ route('users.detailes', auth()->user()) }}"><i data-feather="user"
                                class="svg-icon me-2 ms-1"></i>
                            My Profile</a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                        <a class="dropdown-item"
                            href=""><i data-feather="power"
                                class="svg-icon me-2 ms-1"></i>
                            <input type="submit" style="border:none;background:none;padding: 0"
                                value=" Logout"></a>
                                </form>
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
