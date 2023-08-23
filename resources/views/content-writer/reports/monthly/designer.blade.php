<x-layouts.app>
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
  </head>
     <div class="container-fluid">

          <div class="row">
               <div class="col-12">
                    <div class="card">

                         <div class="card-body">

                              <div class="table-responsive">
                                   <div class="row">
                                        <form>
                                             <div class="customize-input">
                                                  <input
                                                       class="form-control custom-shadow custom-radius border-0 bg-white"
                                                       type="search"
                                                       placeholder="Search"
                                                       aria-label="Search">
                                             </div>
                                        </form>
                                   </div>

                                   <table class="table table-bordered">
                                        <thead>
                                             <tr>

                                                  <th class="text-dark mb-0 font-16 font-weight-medium"> Name
                                                  </th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">Task
                                                  </th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">
                                                       Category</th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">Is
                                                       Active</th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">
                                                       Actions</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ($users as $user)
                                             <tr>
                                                  <td> {{$user->fullname}} </td>
                                                  <td>{{ $user->number_tasks}} </td>
                                                  <td>{{ $user->categories->name??""}} </td>
                                                  <td>{{ $user->is_active}} </td>
                                                  <td>
                                                       <a class="monthly"
                                                            title="monthly"
                                                            data-toggle="tooltip"
                                                            href="{{ route('content-writer_Monthly_designers', $user->id) }}"><i
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
     </div>
     </div>
     <!-- *************************************************************** -->
     <!-- End Top Leader Table -->
     <!-- *************************************************************** -->
     </div>

</x-layouts.app>
