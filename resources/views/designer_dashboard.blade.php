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
                            <h4 class="card-title mb-4">The most requested designes</h4>
                            <canvas id="Chart3"></canvas>
                    </div>
                </div>
            </div>

                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">The most requested designers</h4>
                            <canvas id="Chart1"></canvas>
                    </div>
                </div>
            </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card" >
                            <div class="card-body" >
                                <h4 class="card-title mb-4">The most requested designers</h4>
                                <canvas id="Chart2"></canvas>
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
                                                <th class="border-0 font-14 font-weight-medium text-muted">Category</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Points</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($OrederDesigners as $OrederDesigner)
                                          <tr>
                                                <td class="border-top-0 px-2 py-4">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="me-3"><img
                                                                src="{{ asset( $OrederDesigner->receiver->avatar ?? 'assets\images\users\1.jpg') }}"
                                                                alt="user" class="rounded-circle" width="45"
                                                                height="45" /></div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">{{$OrederDesigner->receiver->fullname}}</h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$OrederDesigner->receiver->email}}</td>
                                                <td> {{ $OrederDesigner->receiver->category}} </td>
                                                <td> {{ $OrederDesigner->total_points}} </td>
                                                </tr>
                                                @endforeach
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
    var ctx = document.getElementById('Chart2').getContext('2d');
    const socialmedia = <?php echo $data['social_media_count'] ?>;
       const Logo = <?php echo $data['Logo_count'] ?>;
       const Covers  = <?php echo $data['Covers_count'] ?>;
       const Drawing = <?php echo $data['Drawing_count'] ?>;
var Chart1 = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [' social media ','Logo ','Covers  ','Drawing '],
    datasets: [{
      label: 'the least',
      data: [socialmedia,Logo,Covers ,Drawing],
      backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
      'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)',
       'rgba(255, 159, 64, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderWidth: 0.5
    }]
}
});
</script>



<script>
    var ctx = document.getElementById('Chart1').getContext('2d');
    const internal_count = <?php echo $data['internal_count'] ?>;
       const external_count = <?php echo $data['external_count'] ?>;
var Chart1 = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Internal order','External order'],
    datasets: [{
      label: 'the least',
      data: [internal_count,external_count],
      backgroundColor: [
       'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
       'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderWidth: 0.5
    }]
}
});
</script>



<script>
    var ctx = document.getElementById('Chart3').getContext('2d');
    const syria_count = <?php echo $data['syria_count'] ?>;
       const Lebanon_count = <?php echo $data['Lebanon_count'] ?>;
       const Turkey_count  = <?php echo $data['Turkey_count'] ?>;
       const Jordan_count = <?php echo $data['Jordan_count'] ?>;
var Chart1 = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [' Syria ','Lebanon ','Turkey  ','Jordan'],
    datasets: [{
      label: 'the least',
      data: [syria_count,Lebanon_count,Turkey_count,Jordan_count],
      backgroundColor: [
       'rgba(255, 99, 132, 0.2)',
        'rgb(60, 60, 60)',
       'rgb(60, 60, 60)',
        'rgb(60, 60, 60)'

      ],
      borderColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgb(60, 60, 60)',
        'rgb(60, 60, 60)',
        'rgb(60, 60, 60)'

      ],
      borderWidth: 0.5
    }]
}
});
</script>

</body>

</html>
</x-layouts.app>
