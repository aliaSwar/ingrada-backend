<x-layouts.app>

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
  <th>Task</th>
  <th>Type</th>
  <th> Start Date</th>
  <th> End Date</th>
  <th>Status</th>
  <th>Details</th>
  </tr>
  </thead>
  <tbody>
      @foreach ($tasks as $task)
  <tr  >
  <td>{{ $task->name}}</td>
  <td> {{ $task->type}} </td>
  <td> {{ $task->start_date}} </td>
  <td> {{ $task->end_date}} </td>
  <td>{{ $task->status}} </td>
  <td>
      <a class="Details"  data-toggle="Details" href="{{ route('task.show', $task->id) }}"><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
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
          <!-- ============================================================== -->
          <!-- End Container fluid  -->

</x-layouts.app>

