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
      <link rel="stylesheet" href="../dist/css/orders.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

              <!-- ============================================================== -->
              <!-- End Bread crumb and right sidebar toggle -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Container fluid  -->
              <!-- ============================================================== -->
              <div class="container-fluid">

                  <div class="row">


                      <div class="col-12">

                          </div>
                          <div class="card">

                              <div class="card-body">

                                  <div class="table-responsive">
                                      <table class="table no-wrap v-middle mb-0">


  <div class="row" style="margin-bottom: 12px;">
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

  <th class="text-dark mb-0 font-16 font-weight-medium">First Name</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">Last name</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">company</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">country</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">email</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">Phone</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">Is Active</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">Actions</th>
  </tr>
  </thead>
  <tbody>
    @foreach ($internal_customers as $internal_customer)
    <tr  >
    <td>{{ $internal_customer->first_name}}</td>
    <td> {{ $internal_customer->last_name}} </td>
    <td>{{ $internal_customer->company}} </td>
    <td>{{ $internal_customer->country}} </td>
    <td>{{ $internal_customer->email}} </td>
    <td>{{ $internal_customer->phone_number}} </td>
    <td>{{ $internal_customer->is_active}} </td>
    <td>
  <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">event_busy</i></a>
  <a class="details" title="Orders" data-toggle="tooltip" href="custmerORder.html"><i class="material-icons">event_note</i></a>

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

        <script type="text/javascript">
          $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();
          var actions = $("table td:last-child").html();
          // Append table with add row form on add new button click
          $(".add-new").click(function(){
          $(this).attr("disabled", "disabled");
          var index = $("table tbody tr:last-child").index();
          var row = '<tr>' +
          '<td><input type="text" class="form-control" name="name" id="name"></td>' +
          '<td><input type="text" class="form-control" name="department" id="department"></td>' +
          '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
          '<td><input type="text" class="form-control" name="Date" id="Date"></td>' +
          '<td><input type="text" class="form-control" name="Type" id="Type"></td>' +
          '<td><input type="text" class="form-control" name="Email" id="Email"></td>' +
          '<td><input type="text" class="form-control" name="Country" id="Country"></td>' +
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
