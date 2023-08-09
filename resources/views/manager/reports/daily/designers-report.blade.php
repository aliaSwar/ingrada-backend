<x-layouts.app>
  <head>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
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
  </head>
  <div class="container-fluid">
                    <main class="py-4">

                        <div class="container">

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        Designer Report
                                    </div>

                                    <div class="card-body">

                                        <div style="margin-bottom: 20px;">

                                        </div>
                                        <form id="filters" action="{{route('filters', $user_id)}}" method="GET" >

                                          @csrf
                                          <input type="date" name="start_date" class="custom-select form-control bg-white custom-radius "  onchange="document.querySelector('#filters').submit(); ">

                                       </form>


                                        <table id="myTable" class="table table-bordered">
                                          <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Count Houres</th>
                                                    <th>Count Task</th>
                                                    <th>TASKS Detials</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                              @foreach ($tasks_by_day as $task)
                                              <tr>
                                                  <td>{{ $task->date }}</td>
                                                  <td>{{ $task->hours  }}</td>
                                                  <td>{{ $task->task_count  }}</td>
                                                  <td>{{ $task->task_ids  }}</td>
                                                  <td>
                                                  <a class="monthly"
                                                  title="monthly"
                                                  data-toggle="tooltip"
                                                  href="{{ route('all_task', $task->task_ids) }}"><i
                                                       class="material-icons">event_note</i></a>
                                                  </td>
                                              </tr>
                                          @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                </div>
                            </div>


                        </div>

                    </main>



  <!-- ============================================================== -->
  <!-- End Page wrapper  -->
  <!-- ============================================================== -->
  </div>
  </div>
  </div>
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
  <link rel="stylesheet" href="https://unpkg.com/tablefilter@2.20.0/dist/tablefilter/tablefilter.css">
  <script src="https://unpkg.com/tablefilter@2.20.0/dist/tablefilter/tablefilter.js"></script>
  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="TableFilter.min.js" defer></script>

  <script src="../dist/js/TableFilter.min.js" ></script>
  </x-layouts.app>
