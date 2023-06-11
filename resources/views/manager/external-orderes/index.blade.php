<x-layouts.app>
      <style>
        #timer, #button-start {
  display: inline-block;
}
.editt
{
    color: #0023d0 !important;
    background-color: #a3d1ff !important;
    border-radius: 5px;
    margin-left: 12px;
}
      </style>
    </head>


  <body >

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-lg">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="index.html">

                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left me-auto ms-3 ps-1">
                    <!-- Notification -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                            id="archive" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span><i data-feather="archive" class="svg-icon"></i></span>
                            <span class="badge text-bg-warning notify-no rounded-circle">5</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                            <ul class="list-style-none">
                                <li>
                                    <div class="message-center notifications position-relative">


                                        <!-- Message -->
                                        <a href="empty.html"
                                            class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="btn btn-info rounded-circle btn-circle"><i
                                                    data-feather="inbox" class="text-white"></i></span>
                                            <div class="w-75 d-inline-block v-middle ps-2">
                                                <h6 class="message-title mb-0 mt-1">Direct orders from app <span class="badge bg-secondary">4</span></h6>
                                                <span
                                                    class="font-12 text-nowrap d-block text-muted text-truncate">
                                                    External orders pending  </span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="external.html"
                                            class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="btn btn-primary rounded-circle btn-circle"><i
                                                    data-feather="package" class="text-white"></i></span>
                                            <div class="w-75 d-inline-block v-middle ps-2">
                                                <h6 class="message-title mb-0 mt-1">New Task <span class="badge bg-secondary">1</span></h6> <span
                                                    class="font-12 text-nowrap d-block text-muted">New tasks assigned to you by the administration</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  pl-md-3 position-relative" href="chat.html"
                            id="mail" role="button"  aria-haspopup="true"
                            aria-expanded="false">
                            <span><i data-feather="mail" class="svg-icon"></i></span>
                            <span class="badge text-bg-warning notify-no rounded-circle">20</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                            id="bell" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span><i data-feather="bell" class="svg-icon"></i></span>
                            <span class="badge text-bg-warning notify-no rounded-circle">5</span>
                        </a>


                        <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                            <ul class="list-style-none">
                                <li>
                                    <div class="message-center notifications position-relative">
                                        <!-- Message -->

                                        <!-- Message -->
                                        <a href="todo.html"
                                            class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                    data-feather="edit-2" class="text-white"></i></span>
                                            <div class="w-75 d-inline-block v-middle ps-2">
                                                <h6 class="message-title mb-0 mt-1">There are new changes coming</h6>
                                                <span
                                                    class="font-12 text-nowrap d-block text-muted text-truncate">Card for a fashion company</span>
                                                <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)"
                                            class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                            <span class="btn btn-info rounded-circle btn-circle"><i
                                                    data-feather="settings" class="text-white"></i></span>
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
                                                    data-feather="box" class="text-white"></i></span>
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
                                    <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                        <strong>Check all notifications</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                width="40">
                            <span class="ms-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                    class="text-dark">Jason Doe</span> <i data-feather="chevron-down"
                                    class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                    class="svg-icon me-2 ms-1"></i>
                                My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                    class="svg-icon me-2 ms-1"></i>
                                My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                    class="svg-icon me-2 ms-1"></i>
                                Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                    class="svg-icon me-2 ms-1"></i>
                                Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                    class="svg-icon me-2 ms-1"></i>
                                Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
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

    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="index.html"
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">HOME</span></a></li>
                    <li class="list-divider"></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="todo.html"
                        aria-expanded="false"><i data-feather="target" class="feather-icon"></i><span
                            class="hide-menu">TODO
                        </span></a>
                    </li>




                                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                    aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                        class="hide-menu">REPORTS </span></a>
                                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                    <li class="sidebar-item"><a href="DailyReport.html" class="sidebar-link"><span
                                                class="hide-menu"> DAILY
                                            </span></a>
                                    </li>
                                    <li class="sidebar-item"><a href="monthlyReport.html" class="sidebar-link"><span
                                                class="hide-menu"> MONTHLY
                                            </span></a>
                                    </li>
                                    <li class="sidebar-item"><a href="AnnulyReport.html" class="sidebar-link"><span
                                                class="hide-menu"> ANNUAL
                                            </span></a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item"> <a class="sidebar-link " href="task.html"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Tasks </span></a>

                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                    <li class="sidebar-item"> <a class="sidebar-link " href="authentication-login1.html"
                        aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                            class="hide-menu">LOGOUT </span></a>
                </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
       <div class="content-page">
     <div class="container-fluid">
        <div class="row">
             <div class="col-12">
                <div class="page-breadcrumb" >
                    <div class="row" style="margin-left: 250px; margin-top: 120px; margin-bottom: 12px; margin-right: 2px; ">
                        <div class="col-5 align-self-center"  >
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

                    </div>
                </div>
            </div>


                            <!--logo customiz-->
                            <div class="col-12">
                                <div class="card" style="margin-left: 280px;">
                                    <div class="card-body">
                                        <div class="row">
                            <div class="col-12">
                                <div class="card card-widget task-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">

                                            </div>

                                            <div class="media align-items-center mt-md-0 mt-3">




                                                <p style="font-size: 19px ;margin-right: 30px; " id="timer"> 00 : 00 : 00 </p>
                                                <a id="button-start" class="btn bg-info-light mr-3"><i class="ri-play-circle-line"></i></a>
                                                <a id="button-stop" class="btn bg-info-light mr-3"><i class="ri-pause-circle-line"></i></a>
                                                <a id="button-reset" class="btn bg-info-light mr-3"><i class="ri-restart-line"></i></a>


                                               <a class="btn editt" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseEdit1"><i class="ri-save-line"></i></a>


                                                    </div>

                                                    <div class="card card-list task-card" id="edit" style="margin-top: 12px;">
                                                        <div  style="margin-top: 20px; margin-left: 16px;">


                                                                <div class="form-group mb-0" style="margin: 19px;">


                                                                    <i class="ri-pencil-ruler-2-line"></i>
                                                                    <label for="exampleInputText01" class="h5"> Status This Task</label>
                                                                    <select  name="type" class="selectpicker custom-select form-control bg-white custom-radius" data-style="py-0">
                                                                        <option> In Progress</option>
                                                                        <option> In Editing</option>
                                                                        <option> In Review</option>
                                                                        <option> Finish</option>

                                                                    </select>
                                                                </div>
                                                             <hr>
                                                        </div>

                                                    <div class="card-body">
                                                        <div class="form-group mb-3 position-relative">

                                                            <input type="text" class=" form-control bg-white  " style="border-radius: 10px;"  value="Design landing page of webkit">
                                                            <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                                                        </div>
                                                        <div class="card mb-3" style="border-radius: 20px;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText2"   class="h5">content creator</label>
                                                                            <select  name="type" class="selectpicker custom-select form-control bg-white custom-radius" data-style="py-0">
                                                                                <option>For Small Project</option>
                                                                                <option> For Meduim Project </option>
                                                                                <option>For Huge Project</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText2"   class="h5">Type </label>
                                                                            <select  name="type" class="selectpicker custom-select form-control bg-white custom-radius" data-style="py-0">
                                                                                <option>Customiz</option>
                                                                                <option>Similer</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">Due Dates</label>
                                                                            <input type="date" class="custom-select form-control bg-white custom-radius " id="exampleInputText3" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">Price</label>
                                                                            <input type="text" class=" form-control bg-white custom-radius " id="exampleInputText3" value="10$">
                                                                        </div>
                                                                    </div>
                                                                    <hr style="margin-top: 12px;">
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText2"   class="h5"> Design</label>
                                                                            <select  name="type" class="selectpicker custom-select form-control bg-white custom-radius" data-style="py-0">
                                                                                <option>Logo</option>
                                                                                <option>Somthing</option>
                                                                                <option>Somthing</option>
                                                                                <option>Somthing</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText2"   class="h5">Type Of Design</label>
                                                                            <input type="text" class=" form-control bg-white custom-radius " id="exampleInputText3" value="symbol">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">Domain</label>
                                                                            <input type="text" class=" form-control bg-white custom-radius " id="exampleInputText3" value="sport">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-lg-2">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">Colors</label>
                                                                            <div class="form-control bg-white custom-radius" style="text-align:justify;">
                                                                            <span class="dot" style="height: 25px; width: 25px;  background-color: #d10707; border-radius: 50%; display: inline-block;"></span>
                                                                            <span class="dot" style="height: 25px; width: 25px;  background-color: #a7c920; border-radius: 50%; display: inline-block;"></span>
                                                                            <span class="dot" style="height: 25px; width: 25px;  background-color: rgb(51, 168, 88); border-radius: 50%; display: inline-block;"></span>
                                                                            <span class="dot" style="height: 25px; width: 25px;  background-color: #520a0a; border-radius: 50%; display: inline-block;"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <hr style="margin-top: 12px;">
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">Illustration From Client</label>
                                                                            <div class="form-control bg-white custom-radius" style="text-align:justify;">
                                                                                <a href="C:\Users\ABC\Desktop\cpp">
                                                                                    Click to open Image
                                                                                </a>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">File From Client</label>
                                                                            <div class="form-control bg-white custom-radius" style="text-align:justify;">
                                                                                <a href="C:\Users\ABC\Desktop\cpp">
                                                                                    Click to open file
                                                                                </a>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">FOnt</label>
                                                                            <div class="form-control bg-white custom-radius" style="text-align:justify;">
                                                                                <a href="C:\Users\ABC\Desktop\cpp">
                                                                                    Click to open Image
                                                                                </a>
                                                                                </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card mb-3" style="border-radius: 20px;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                        <h5 style="color: #333; " class="mb-2">Description :</h5>
                                                                        <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card mb-3" style="border-radius: 20px;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                        <h5 style="color: #333; " class="mb-2">A Note From The Client About His Order  :</h5>
                                                                        <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card mb-3" style="border-radius: 20px;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="form-group mb-0">
                                                                        <i class="ri-attachment-2"></i>
                                                                        <label for="exampleInputText01" class="h5">Upload Attachments</label>
                                                                        <input type="file" class=" form-control bg-white  " style="border-radius: 10px;" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <!--logo customiz-->



        <!-- Page end  -->



    <!-- Backend Bundle JavaScript -->
    <script src="../dist/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../dist/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../dist/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="../dist/js/chart-custom.js"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="../dist/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="../dist/js/app.js"></script>

    <script src="../dist/vendor/moment.min.js"></script>





    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>

    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
      <!-- Vendors JS -->
      <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
      <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <!-- Main JS -->
      <script src="../assets/js/main.js"></script>

      <!-- Page JS -->
      <script src="../assets/js/dashboards-analytics.js"></script>


      <script>
        const timer     = { ref:null, tZero:null, tim:0 }
    , myTime    = document.getElementById('timer')
    , btStart   = document.getElementById('button-start')
    , btStop    = document.getElementById('button-stop')
    , btReset   = document.getElementById('button-reset')
    , twoDigits = n => ('0' + n).slice(-2)
    , one_Sec   = 1000
    , one_Min   = one_Sec * 60
    , one_Hour  = one_Min * 60

function countUp()
  {
  let now   = new Date().getTime()
  timer.tim = now - timer.tZero
  let h     = Math.floor(timer.tim  / one_Hour)
    , m     = Math.floor((timer.tim % one_Hour) / one_Min  )
    , s     = Math.floor((timer.tim % one_Min ) / one_Sec  )

  myTime.textContent = ` ${twoDigits(h)} : ${twoDigits(m)} : ${twoDigits(s)} `
  }

btStart.onclick=()=>
  {
  timer.tZero      = new Date().getTime() - timer.tim
  timer.ref        = setInterval(countUp,500)
  btStart.disabled = true
  btStop.disabled  = false
  }
btStop.onclick=()=>
  {
  clearInterval( timer.ref )
  timer.ref        = null
  btStart.disabled = false
  btStop.disabled  = true
  }
btReset.onclick=()=>
  {
  if (timer.ref) clearInterval( timer.ref )
  myTime.textContent = ' 00 : 00 : 00 '
  timer.tZero        = null
  timer.ref          = null
  timer.tim          = 0
  btStart.disabled   = false
  btStop.disabled    = true
  }
      </script>
</x-layouts.app>
