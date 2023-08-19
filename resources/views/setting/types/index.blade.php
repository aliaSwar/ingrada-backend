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

<th>Name</th>
<th>Avarage price</th>
<th>number properties</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr  >

    @foreach ($types as $type)
       <td>{{$type->name }}</td>
       <td>{{$type->price }} $</td>
       <td>{{ $type->proprtiesnumber }}</td>


<td>
<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">check_circle</i></a>
<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">gesture</i></a>
<a class="details" title="details" data-toggle="tooltip" href="{{ route('types.show', $type) }}"><i class="material-icons">content_paste</i></a>
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



</x-layouts.app>


