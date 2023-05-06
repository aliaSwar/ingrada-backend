<x-layouts.app>
    <x-slot name="styles">
<style type="text/css">
    body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;

    }
    .table-wrapper {
    width: 1090px;
    margin: 1x auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    }
    .table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
    }
    .table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
    }
    .table-title .add-new i {
    margin-right: 4px;
    }
    table.table {
    table-layout: fixed;
    }
    table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    }
    table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
    }
    table.table th:last-child {
    width: 100px;
    }
    table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
    }
    table.table td a.add {
    color: #63f1a1;
    }
    table.table td a.edit {
    color: #18131a;
    }
    table.table td a.delete {
    color: #141310;
    }
    table.table td a.details {
    color: #7509e0;
    }

    table.table td i {
    font-size: 19px;
    }
    table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
    }
    table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
    }
    table.table .form-control.error {
    border-color: #f50000;
    }
    table.table td .add {
    display: none;
    }
    button
    {
        margin: 10px auto;
    }
    #myTable
    {
        margin-top: 30px;
    }
    </style>
</x-slot>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
<div class="row">
    <form action="{{ route('fonts.store') }}" method="POST" class="row g-3 needs-validation"
    enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="input-group mb-3">
        <input type="text" input name="name" class="form-control" placeholder="ADD NEW FONT!"  >
        <input type="file" input name="path" class="form-control">
        <button class="btn btn-warning" type="submit">save</button>
      </div>
    </form>

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
<th>Font</th>
<th>Image</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr  >
    @foreach ($fonts as $font)
    <tr>
        <td>{{ $font->name }}</td>
        <td><img src="{{ asset('fonts'.$font->image) }}" width="100px"></td>
<td>
<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">event_busy</i></a>
</td>
</tr>
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


</body>

</html>
</x-layouts.app>
