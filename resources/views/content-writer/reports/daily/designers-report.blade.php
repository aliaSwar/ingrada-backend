<x-layouts.app>

  <div class="container-fluid">
                    <main class="py-4">

                        <div class="container">

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        Designer Report
                                    </div>

                                    <div class="card-body">

                                        <div style="margin-bottom: 20px;">

                                        </div>
                                        <form id="filters" action="{{route('filters', $user_id)}}" method="GET" >

                                          @csrf
                                          <input type="date" name="start_date" class="custom-select form-control bg-white custom-radius "  onchange="document.querySelector('#filters').submit(); ">

                                       </form>


                                        <table id="myTable" class="table table-bordered">
                                          <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Count Houres</th>
                                                    <th>Count Task</th>
                                                    <th>TASKS Detials</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                              @foreach ($tasks_by_day as $task)
                                              <tr>
                                                  <td>{{ $task->date }}</td>
                                                  <td>{{ $task->hours ??''}}</td>
                                                  <td>{{ $task->task_count  }}</td>
                                                  <td>{{ $task->task_ids  }}</td>
                                                  <td>
                                                  <a class="monthly"
                                                  title="monthly"
                                                  data-toggle="tooltip"
                                                  href="{{ route('content-writer_all_task', $task->task_ids) }}"><i
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

                    </main>




  </x-layouts.app>
