<x-layouts.app>


    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
        <title>Freedash Template - The Ultimate Multipurpose admin template</title>

        <link rel="stylesheet" href="../assets/libs/chart.js/dist/apex-charts.css" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
        <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet">
        <link type="text/css" href="@@path/vendor/apexcharts/dist/apexcharts.css" rel="stylesheet">
        <link
      href="https://fonts.googleapis.com/css?family=Rock+Salt"
      rel="stylesheet"
      type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

          <link rel="shortcut icon" href="../dist/images/favicon.ico" />
          <link rel="stylesheet" href="../dist/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
          <link rel="stylesheet" href="../dist/vendor/remixicon/fonts/remixicon.css">
          <link rel="stylesheet" href="../dist/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
          <link rel="stylesheet" href="../dist/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">
          <link rel="stylesheet" href="../dist/css/orders.css">
          <style type="text/css">
            body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;

            }
            .table-wrapper {
            width: 1090px;
            margin: 1x auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
            }
            .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
            }
            .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
            }
            .table-title .add-new i {
            margin-right: 4px;
            }
            table.table {
            table-layout: fixed;
            }
            table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            }
            table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
            }
            table.table th:last-child {
            width: 100px;
            }
            table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
            }
            table.table td a.add {
            color: #63f1a1;
            }
            table.table td a.edit {
            color: #18131a;
            }
            table.table td a.delete {
            color: #141310;
            }
            table.table td a.details {
            color: #7509e0;
            }

            table.table td i {
            font-size: 19px;
            }
            table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
            }
            table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
            }
            table.table .form-control.error {
            border-color: #f50000;
            }
            table.table td .add {
            display: none;
            }
            button
            {
                margin: 10px auto;
            }
            #myTable
            {
                margin-top: 30px;
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
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
    <div class="row">


    <form>
        <div class="customize-input">
            <input class="form-control custom-shadow custom-radius border-0 bg-white"
            id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search">
        </div>

    </form>
    </div>
    <table class="table table-bordered" id="myTable">
    <thead>
    <tr>
    <th>Task</th>
    <th>Type</th>
    <th>Status</th>
    <th>Details</th>
    </tr>
    </thead>
    <tbody>
    <tr  >
    <td>logo customiz</td>
    <td> logo </td>
    <td> In progress </td>
    <td>
        <a class="Details"  data-toggle="Details" href="logo customiz.html"><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
    </td>
    </tr>
    <tr  >
        <td>logo similer</td>
        <td> logo </td>
        <td> In progress </td>
        <td>
            <a class="Details"  data-toggle="Details" href="logo similer.html"><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
        </td>
        </tr>
        <tr  >
            <td>social media similler</td>
            <td> logo </td>
            <td> In progress </td>
            <td>
                <a class="Details"  data-toggle="Details" href="social media similler.html"><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
            </td>
            </tr>
            <tr  >
                <td>social media customiz</td>
                <td> logo </td>
                <td> In progress </td>
                <td>
                    <a class="Details"  data-toggle="Details" href="social media customiz.html"><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
                </td>
                </tr>
                <tr  >
                    <td>rest designes similer</td>
                    <td> logo </td>
                    <td> In progress </td>
                    <td>
                        <a class="Details"  data-toggle="Details" href="rest designes similer.html"><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
                    </td>
                    </tr>
                    <tr  >
                        <td>rest designes customiz</td>
                        <td> logo </td>
                        <td> In progress </td>
                        <td>
                            <a class="Details"  data-toggle="Details" href="rest designes customiz.html"><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
                        </td>
                        </tr>
    </tbody>
    </table>
                                    </table>
                                </div>
                            </div>
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
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        var actions = $("table td:last-child").html();
        // Append table with add row form on add new button click
        $(".add-new").click(function(){
        $(this).attr("disabled", "disabled");
        var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
        '<td><input type="text" class="form-control" name="name" id="name"></td>' +
        '<td><input type="text" class="form-control" name="department" id="avargePrice"></td>' +

        '<td>' + actions + '</td>' +
        '</tr>';
        $("table").append(row);
        $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
        });
        // Add row on add button click
        $(document).on("click", ".add", function(){
        var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
        if(!$(this).val()){
        $(this).addClass("error");
        empty = true;
        } else{
        $(this).removeClass("error");
        }
        });
        $(this).parents("tr").find(".error").first().focus();
        if(!empty){
        input.each(function(){
        $(this).parent("td").html($(this).val());
        });
        $(this).parents("tr").find(".add, .edit").toggle();
        $(".add-new").removeAttr("disabled");
        }
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function(){
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
        $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
        });
        $(this).parents("tr").find(".add, .edit").toggle();
        $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
        $(".add-new").removeAttr("disabled");
        });
        });
        </script>
         <script>
            function myFunction() {
     var input, filter, table, tr, td, cell, i, j;
     input = document.getElementById("myInput");
     filter = input.value.toUpperCase();
     table = document.getElementById("myTable");
     tr = table.getElementsByTagName("tr");
     for (i = 1; i < tr.length; i++) {
       // Hide the row initially.
       tr[i].style.display = "none";

       td = tr[i].getElementsByTagName("td");
       for (var j = 0; j < td.length; j++) {
         cell = tr[i].getElementsByTagName("td")[j];
         if (cell) {
           if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
             tr[i].style.display = "";
             break;
           }
         }
       }
     }
    }
           </script>
    </html>
</x-layouts.app>
