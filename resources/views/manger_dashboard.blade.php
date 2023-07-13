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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link type="text/css" href="@@path/vendor/apexcharts/dist/apexcharts.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
    .bg-info-light
       {
        color: #FABB18 !important;
    background-color: #FFF8E8 !important;
    border-radius: 5px;
    margin-left: 12px;
       }
</style>
</head>


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
                                            <h2 class="text-dark mb-1 font-weight-medium">4:20:2</h2>

                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Today's work hours
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <a href="#" class="btn bg-info-light mr-3" ><i data-feather="pen-tool" class="feather-icon"></i></a>
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
                                            <h2 class="text-dark mb-1 font-weight-medium">4:90:2</h2>

                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"> This Week's work hours
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <a href="#" class="btn bg-info-light mr-3" ><i data-feather="clock" class="feather-icon"></i></a>
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
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"> Assigned tasks
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">

                                        <a href="#" class="btn bg-info-light mr-3" ><i data-feather="list" class="feather-icon"></i>

                                        </a>
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
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Direct orders</h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <a href="#" class="btn bg-info-light mr-3" ><i data-feather="inbox" class="feather-icon"></i></a>
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
                                <h4 class="card-title mb-4">The most requested designers</h4>
                                <canvas  id="myChart" ></canvas>


                        </div>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Demand for each region</h4>
                                <div class="net-income mt-4 position-relative" style="height:294px;"></div>
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
                            </div></div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">

                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Designer
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Email
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Projrct</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="me-3"><img
                                                                src="../assets/images/users/widget-table-pic1.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna
                                                                Gover</h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">	bb98@gmail.com

                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">	50

                                                </td>

                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="me-3"><img
                                                                src="../assets/images/users/widget-table-pic2.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Daniel
                                                                Kristeen
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">	bb98@gmail.com

                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">	45

                                                </td>

                                                <td class="font-weight-medium text-dark px-2 py-4">
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="me-3"><img
                                                                src="../assets/images/users/widget-table-pic3.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Julian
                                                                Josephs
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">	bb98@gmail.com

                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">	50

                                                </td>
                                                <td class="font-weight-medium text-dark px-2 py-4">
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="me-3"><img
                                                                src="../assets/images/users/widget-table-pic4.jpg"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Jan
                                                                Petrovic
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">	bb98@gmail.com

                                                </td>
                                                <td class="font-weight-medium text-dark border-top-0 px-2 py-4">	50

                                                </td>

                                                <td class="border-bottom-0 font-weight-medium text-dark px-2 py-4">	<i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
                                                    <i data-feather="star" ></i>
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
           var options = {
          series: [{
            color:"#E4E0F2",

          name: 'Inflation',
          data: [{

      x: {{ $internal_count }},
      y: 10
    }, {
      x: 'Hannaa',
      y: 18
    }, {
      x: 'Boushra',
      y: 13

    },
    {
      x: 'Owais',
      y: 13 },
      {
        x: 'Nada',
      y: 13
    }
     ]
        }],
          chart: {
          height: 350,
          type: 'bar',
        },
        plotOptions: {
          bar: {
                  horizontal: true,
            borderRadius: 10,

            dataLabels: {
             position: 'bottom', // top, center, bottom

            },
          }
        },
        dataLabels: {
            enabled:false,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            color: ["#FFF0BB"]
          }
        },


        title: {

          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      </script>


      <script>
       var ctx = document.getElementById("myChart").getContext('2d');
       const data = <?php echo $internal_count ?>;
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Advertising and social media",	"Logo and visual identity",	"Covers of books and magazines",	"Drawing of products and packages"],
        datasets: [{
            data: [ data,	20,	30,	30], // Specify the data values array

            borderColor: ['rgb(255, 222, 135)', 'rgb(97, 97, 97)', 'rgb(200, 200, 200)', 'rgb(247, 231, 190)'], // Add custom color border
            backgroundColor: ['rgb(255, 222, 135)', 'rgb(97, 97, 97)', 'rgb(200, 200, 200)', 'rgb(247, 231, 190)'], // Add custom color background (Points and Fill)
            borderWidth: 0.5 // Specify bar border width
        }]},

});
      </script>


</body>

</html>
</x-layouts.app>
