<x-layouts.app>

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

<th class="text-dark mb-0 font-16 font-weight-medium"> Name</th>
<th class="text-dark mb-0 font-16 font-weight-medium">Username</th>
<th class="text-dark mb-0 font-16 font-weight-medium">Task</th>
<th class="text-dark mb-0 font-16 font-weight-medium">Category</th>
<th class="text-dark mb-0 font-16 font-weight-medium">Role</th>
<th class="text-dark mb-0 font-16 font-weight-medium">Actions</th>
</tr>
</thead>
<tbody>
  @foreach ($users as $user)
  <tr  >
  <td>{{ $user->username}}</td>
  <td> {{$user->fullname}} </td>
  <td>{{ $user->number_tasks}} </td>



  <td></td>
  <td></td>

  <td>
<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">event_busy</i></a>
<a class="details" title="details" data-toggle="tooltip" href=""><i class="material-icons">event_note</i></a>
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
          </div>
     </div>
     </div>
     <!-- *************************************************************** -->
     <!-- End Top Leader Table -->
     <!-- *************************************************************** -->
     </div>

</x-layouts.app>
