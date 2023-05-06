
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Using a local copy -->

<!-- Include the default stylesheet -->
<link rel="stylesheet" type="text/css" href="multiple-select.css">
<!-- Include plugin -->

<!-- Or using a CDN -->

<!-- Include the default stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
<!-- Include plugin -->


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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
	#demo {
  font-size: 24px;
  height: 24px;
  padding: 0;
  display: flex;

}

body {
  padding : 30px;
}

code {
  padding: 5px 8px;
  border-radius: 10px;
  background-color: #f8f9f9;
  color: #8d7983;
}

[type='color'] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  padding: 0;
  width: 15px;
  height: 15px;
  border: 10px;
}

[type='color']::-webkit-color-swatch-wrapper {
  padding: 0;
}

[type='color']::-webkit-color-swatch {
    border: 0px solid #070606;
    border-radius: 2px;
    width: 20 px;

}

.color-picker {
  padding: 10px 15px;
  border-radius: none;
  border: 1px solid #120a0a;
  background-color: #f8f9f9;
  margin-top:1060px;
}
#hex
{
    margin-left: 12px;
    margin-top: 12px;
}
#submittype
{margin-top: 12px;
margin-left: 990px;
}
.filled-circle {
  padding: 2px 11px;
  border-radius: 100%;
  background-color: #f38e23;
}
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
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
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
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
                                                        data-feather="calendar" class="text-white"></i></span>
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
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
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
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                                class="hide-menu">DESIGNERS </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="Employee.html" class="sidebar-link"><span
                                        class="hide-menu"> SHOW
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="addNew.html" class="sidebar-link"><span
                                        class="hide-menu"> ADD NEW
                                    </span></a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="sliders" class="feather-icon"></i><span
                            class="hide-menu">ORDERS </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="permission.html" class="sidebar-link"><span
                                    class="hide-menu"> SHOW & ADD
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="Editpermition.html" class="sidebar-link"><span
                                    class="hide-menu">EDIT
                                </span></a>
                        </li>

                    </ul>
                    </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar.html"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendar</span></a></li>
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
                                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                    aria-expanded="false"><i data-feather="trello" class="feather-icon"></i><span
                                        class="hide-menu">DEPLOYMENT </span></a>
                                <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                    <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span
                                                class="hide-menu"> CLASS TASK
                                            </span></a>
                                    </li>
                                    <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><span
                                                class="hide-menu"> CLASS DESIGNER
                                            </span></a>
                                    </li>
                                    <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span
                                                class="hide-menu">WORKING TASK
                                            </span></a>
                                    </li>
                                    <li class="sidebar-item"><a href="add role.html" class="sidebar-link"><span
                                        class="hide-menu">ADD RULE
                                    </span></a>
                            </li>
                                </ul>
                            </li>
                            <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">DOMAINS & FONTS </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="FONT.html" class="sidebar-link"><span
                                            class="hide-menu"> SHOW & ADD FONTS
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="domain.html" class="sidebar-link"><span
                                            class="hide-menu">
                                           ADD DOMAIN
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="showdomain.html" class="sidebar-link"><span
                                    class="hide-menu">
                                   SHOW DOMAIN
                                </span></a>
                        </li>

                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                class="hide-menu">TYPES OF DESIGNES </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">

                            <li class="sidebar-item"><a href="showtypes.html" class="sidebar-link"><span
                                        class="hide-menu"> SHOW TYPES
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="add type.html" class="sidebar-link"><span
                                        class="hide-menu">
                                        ADD TYPE
                                    </span></a>
                            </li>


                        </ul>
                    </li>

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
						<div class="input-group mb-3">
						  </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <form class="row g-3">
                                        <label>DOMAIN:</label>
                                        <div class="col-auto" id="typ1">
                                          <label for="inputPassword2" class="visually-hidden">ADD NEW DOMAIN!</label>
                                          <input type="text" class="form-control" id="permission" placeholder="ADD NEW DOMAIN!">
                                        </div>
                                        <hr>
                                        <label id="text">COLORS FOR THIS:</label>
                                        <br>
                                        <form name="add_name" id="add_name" id="fieldset">

                                                <input type="color" style="margin-right: 4px;"  id="colorPicker">
                                                <input type="color" style="margin-right: 4px;"  id="colorPicker">
                                                <input type="color" style="margin-right: 4px;"  id="colorPicker">
                                                <input type="color" style="margin-right: 4px;"   id="colorPicker">


                                                    <label for="colorPicker" id="hex">
                                                    </label>


                                          </form>



                                      </form>


                                      <input type="submit" id="submittype" class="btn btn-primary" name="submit" id="submit" value="Submit">
                                </form>


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
      <script src="multiselect-dropdown.js" ></script>
      <script src="../assets/js/main.js"></script>

      <!-- Page JS -->  <script type="module" src="../../source/modules/smart.dropdownlist.js"></script>
    <script type="module" src="index.js"></script>

      <script src="../assets/js/dashboards-analytics.js"></script>

<script>
    document.querySelectorAll('input[type=color]').forEach(function(picker) {

var targetLabel = document.querySelector('label[for="' + picker.id + '"]'),
  codeArea = document.createElement('span');

codeArea.innerHTML = picker.value;
targetLabel.appendChild(codeArea);

picker.addEventListener('change', function() {
  codeArea.innerHTML = picker.value;
  targetLabel.appendChild(codeArea);
});
});
</script>
      <script>
        $(document).ready(function(){

  var i = 1;
    var length;
    //var addamount = 0;
   var addamount = 0.0;

  $("#add").click(function(){



     addamount += 0.0;
     console.log('amount: ' + addamount);
   i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td> <span class="color-picker"> <label for="colorPicker"> <input type="color" value="#1DB8CE" id="colorPicker"> </label> </span></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

  $(document).on('click', '.btn_remove', function(){
    addamount -= 0.0;
    console.log('amount: ' + addamount);



      var button_id = $(this).attr("id");
      $('#row'+button_id+'').remove();
    });



    $("#submit").on('click',function(event){
    var formdata = $("#add_name").serialize();
      console.log(formdata);

      event.preventDefault()

      $.ajax({
        url   :"action.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#add_name")[0].reset();
        }
      });

    });
  });
    </script>



    <script>let color = document.querySelector('.colorPick')
        let themeColor = document.querySelector('#theme-color')

        const setColor = (colorSel, textSel) => {
          // change the value to the default color
          themeColor.value = color.value
          // event listener to change the text input value when the pickers value changes
          color.addEventListener('change', () => {
            return themeColor.value = color.value
          })
        }

        setColor(color, themeColor)</script>


    <script src="multiple-select.js"></script>
    <script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>

</body>

</html>
