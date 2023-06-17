<x-layouts.app>
<!DOCTYPE html>
<html dir="ltr" lang="en">

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
    <link href="..\dist\css\profile.scss">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">

    #task1
    {
        margin-top: 12px;
    }
    #task2
    {
        margin-top: 12px;
        margin-bottom: 12px;
    }
    #card1
    {
        margin-top: 12px;
    }
    #card2
    {
        margin-top: 12px;

    }
    #save
    {
       margin-left: 400px;
    }
    .profile-pic {
    border-radius: 50%;
    height: 150px;
    width: 150px;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    text-align: center;
    color: transparent;
    transition: all .3s ease;
    text-decoration: none;
    cursor: pointer;
}

.profile-pic:hover {
    background-color: rgba(0,0,0,.5);
    z-index: 10000;
    color: #fff;
    transition: all .3s ease;
    text-decoration: none;
}

.profile-pic span {
    display: inline-block;
    padding-top: 4.5em;
    padding-bottom: 4.5em;
}

form input[type="file"] {
          display: none;
          cursor: pointer;
 }

 #rating span {
  font-size: 30px;
  cursor: pointer;
}
    </style>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
                <div class="container">
                <div class="main-body">
                <div class="row">
                <div class="col-lg-4">
                <div class="card" id="card1">
                <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <label for="fileToUpload">
                      <div class="profile-pic" style="background-image: url('https://randomuser.me/api/portraits/med/men/65.jpg')">
                          <span class="glyphicon glyphicon-camera"></span>
                          <span >Change Image</span>
                      </div>
                      </label>
                      <input type="File" name="fileToUpload" id="fileToUpload">
                    </form>
                    <h4 class="mb-0" style="margin-top: 12px;">joun doe</h4>
                    <h6 class="mb-0" style="margin-top: 12px;">Designer</h6>

                </div>
                <hr class="my-4">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0">Rating</h6>
                        <span class="text-secondary">
                            <div id='rating'>
                                <span>&#9734; </span>
                                <span>&#9734;</span>
                                <span>&#9734;</span>
                                <span>&#9734;</span>
                                <span>&#9734;</span>
                              </div>
                        </span>

                        </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0"> tasks received</h6>
                <span class="text-secondary">13</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                <h6 class="mb-0">  tasks completed </h6>
                <span class="text-secondary">20</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">

                    <i class="material-icons"></i>
                    <a id="button" href="reports.html " style="color: #89a7ee;"> show reports </a>

                    </li>




                </li>
                </ul>
                </div>
                </div>
                </div>
                <div class="col-lg-8">
                <div class="card" id="card2">
                <div class="card-body">
                <div class="row mb-3">
                <div class="col-sm-3">
                <h6 class="mb-0"> Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="John ">
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" value="Doe">
                    </div>
                    </div>

                <div class="row mb-3">
                <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="john@example.com">
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" value="mmnnoo00">
                    </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Role</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <select  name="type" class="selectpicker custom-select form-control bg-white " data-style="py-0">
                                <option> designer</option>
                                <option> content creator</option>

                            </select>
                        </div>
                        </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Category</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <select  name="type" class="selectpicker custom-select form-control bg-white " data-style="py-0">
                                <option> fast</option>
                                <option> creative creator</option>

                            </select>
                        </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Vacation</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="10">
                            </div>
                            </div>
                <div class="row mb-3">
                <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="(239) 816-9029">
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-sm-3">
                <h6 class="mb-0">Mobile</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="(320) 380-4539">
                </div>
                </div>
                <div class="row mb-3">
                <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                </div>
                <div class="col-sm-3" id="task1">
                    <h6 class="mb-0">Number Task</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" id="task1">
                    <input type="number" class="form-control" value="18">
                    </div>
                    <div class="col-sm-3" id="task2">
                        <h6 class="mb-0">Vacations</h6>
                        </div>
                        <div class="col-sm-9 text-secondary" id="task2">
                        <input type="number" class="form-control" value="20">
                        </div>


                <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                <input type="button" class="btn btn-outline-warning px-4" value="Save Changes" id="save">
                </div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-12">

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
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="TableFilter.min.js" defer></script>
      <script>
  try {
    fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
      return true;
    }).catch(function(e) {
      var carbonScript = document.createElement("script");
      carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
      carbonScript.id = "_carbonads_js";
      document.getElementById("carbon-block").appendChild(carbonScript);
    });
  } catch (error) {
    console.log(error);
  }
  </script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46156385-1', 'cssscript.com');
    ga('send', 'pageview');

  </script>
  <script src="../dist/js/TableFilter.min.js" ></script>
  <script>
    var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};

  </script>
</body>

</html>
</x-layouts.app>
