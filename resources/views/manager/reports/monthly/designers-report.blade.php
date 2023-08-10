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


                                          <form id="filters" action="{{route('filters', $user_id)}}" method="GET" >

                                            @csrf
                                            <i data-feather="filter" class="feather-icon"></i>
                                            <input class="input-field border-0" type="date" name="monthly_date" id="filter0" data-bs-toggle="tooltip" placeholder="Filter Date" onchange="document.querySelector('#filters').submit(); ">



                                         </form>

                                        </div>

                                        <table id="filter" class="table table-bordered" >
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Count Houres</th>
                                                    <th>Count Task</th>
                                                    <th>TASKS Detials</th>
                                                    <th>Rating Month</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                              @foreach ($tasks_by_month as $task)
                                              <tr>
                                                  <td>{{ $task->month }}</td>
                                                  <td>{{ $task->hours  }}</td>
                                                  <td>{{ $task->task_count  }}</td>
                                                  <td>{{  $task->task_ids   }}</td>
                                                  <td>{{  $average_points  }}</td>
                                                  <td>
                                                    <a class="monthly"
                                                    title="monthly"
                                                    data-toggle="tooltip"
                                                    href="{{ route('all_task', $task->task_ids) }}"><i
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
