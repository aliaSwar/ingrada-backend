
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
<th>Domain</th>
<th>Colors</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
  @foreach ($scopes as $scope)
<tr  >
<td>{{$scope->name }}</td>
<td>
@foreach ($scope->collors as $color)
<span class="dot" style="height: 25px; width: 25px;  background-color: {{ $color->code??""}}; border-radius: 50%; display: inline-block;"></span>
@endforeach
</td>

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

</body>

</html>
</x-layouts.app>
