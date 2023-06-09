<x-layouts.app>

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


                              <form action="{{ route('prefernc.store', $type) }}" method="POST" class="row g-3 needs-validation"
                              enctype="multipart/form-data">

                              {{ csrf_field() }}
                                        <i data-feather="bookmark" class="svg-icon" style="color: rgb(208, 90, 90);"></i>
                                        <label>logo and visual identity : 1</label>
                                        <hr>
                                        <label>PROPERTIES NAME:</label>
                                        <div class="col-auto" id="typ1">
                                          <label for="inputPassword2" class="visually-hidden"></label>
                                          <input type="text"  name='name' class="form-control"  style="margin-top: 12px;" >
                                        </div>
                                        <label>PROPERTIES IMAGE:</label>
                                        <div class="col-auto" id="typ1">
                                          <label for="inputPassword2" class="visually-hidden">ADD</label>
                                          <input type="file" name='image' class="form-control"  style="margin-top: 12px;" >
                                        </div>
                                        <label id="ava1" style="margin-top: 12px; margin-bottom: 12px;">AVARAGE PRICE:</label>
                                        <div class="input-group" id="ava2" >

                                            <input type="text" name='price' class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                              <span class="input-group-text">$</span>

                                            </div>
                                          </div>
                                        <hr>




                                      <input type="submit" id="submittype" class="btn btn-primary" name="submit" id="submit" value="Submit">


                                      <script>
                                        function addprp() {
                                          window.location.href = "newProperties.html";
                                        }
                                      </script>


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










    <script src="multiple-select.js"></script>
    <script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>

</body>

</html>
</x-layouts.app>
