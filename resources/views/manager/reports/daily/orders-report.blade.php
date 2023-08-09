<x-layouts.app>
  <div class="container-fluid">
                    <main class="py-4">

                        <div class="container">

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        ORDER Report
                                    </div>
                                    <div class="card-body">

                                        <div style="margin-bottom: 20px;">
                                          <form id="filters" action="{{route('filters_task')}}" method="GET" >

                                            @csrf
                                            <input type="date" name="start_date" class="custom-select form-control bg-white custom-radius "  onchange="document.querySelector('#filters').submit(); ">

                                         </form>
                                        </div>

                                        <table id="filter" class="table table-bordered" >
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
  </x-layouts.app>
