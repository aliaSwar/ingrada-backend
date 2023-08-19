<x-layouts.app>
  <style type="text/css">

          #rating span.active {
        color: orange;
      }

      #rating span {
        font-size: 20px;
        cursor: pointer;
}
    </style>
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
                                                  @if ( is_null($average_points ))
                                                  <td>
                                                      <div id='rating' data-user-id="{{ $user_id }}">
                                                        <span>&#9734; </span>
                                                        <span>&#9734;</span>
                                                        <span>&#9734;</span>
                                                        <span>&#9734;</span>
                                                        <span>&#9734;</span>
                                                      </div>
                                                      <hr>
                                                  </td>
                                                  @else
                                                  <td>{{  $average_points  }}</td>
                                                  @endif
                                                  <td>
                                                    <a class="monthly"
                                                    title="monthly"
                                                    data-toggle="tooltip"
                                                    href="{{ route('all_tasks', $task->task_ids) }}"><i
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

                          <!-- Page JS -->
      <script src="../assets/js/dashboards-analytics.js"></script>
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="TableFilter.min.js" defer></script>
      <script>




       const stars = document.querySelectorAll('#rating span');

    stars.forEach((star, index) => {
        star.addEventListener('click', function () {
            count = index + 1;
            updateStars();
            console.log('Number of active stars: ' + count);
            //console.log(designer_id);
            // Send count rating to Laravel controller via AJAX
            sendDataToController(count);
        });
    });

    function updateStars() {
        stars.forEach((star, index) => {
            if (index < count) {
                star.classList.add('active');
            } else {
                star.classList.remove('active');
            }
        });
    }

    function sendDataToController(count) {
       const ratingElement = document.querySelector('#rating');
       const designer_id = ratingElement.dataset.userId;

       console.log('User ID:', designer_id);

        const url = '/rating'; // Replace with your Laravel route URL
        const data = {
            count: count,
            designer_id: designer_id
        };

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Replace with the appropriate CSRF token
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if (response.ok) {
                return response // Parse the response body as JSON
            } else {
                throw new Error('Error sending rating count to controller.');
            }
        })
        .then(data => {
            // Handle the data received from the controller
            console.log('Response from controller:', data);
        }).catch(error => {
    // Handle any errors that occur during the AJAX request
    console.log("dsdsfd");

          });
    }
</script>
  </x-layouts.app>
