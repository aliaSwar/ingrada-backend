<x-layouts.app>
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
       <td>4</td>


<td>
<a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">check_circle</i></a>
<a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">gesture</i></a>
<a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">event_busy</i></a>
<a class="details" title="details" data-toggle="tooltip" href="detailsType.html"><i class="material-icons">content_paste</i></a>
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


