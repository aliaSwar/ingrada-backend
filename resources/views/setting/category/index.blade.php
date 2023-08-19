
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
<th>Cateogry</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
  @foreach ($cateogries as $cateogry)
<tr  >
<td>{{$cateogry->name }}</td>
<td>
<a class="delete" title="Delete" data-toggle="tooltip"><i data-feather="trash" class="svg-icon"></i></a>
</td>
</tr>
@endforeach
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

</body>

</html>
</x-layouts.app>
