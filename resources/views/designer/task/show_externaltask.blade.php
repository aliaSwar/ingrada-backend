
<x-layouts.app>
      <!-- Other head elements -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <div class="content-page">
    <div class="container-fluid">
         <div class="row">
              <div class="col-12">
                   <div class="card">
                        <div class="card-body">
                             <div class="card card-list task-card">
                                  <div class="card-body">
                                       <div class="form-group mb-3 position-relative">

                                            <h2>Display New External Order To Designer <a href="#">{{$designer_name->fullname??''}}</a></h2>
                                       </div>

                                       
                                             <div style="font-size: 19px" id="timer">00:00:00</div>
                                             <button id="startButton" class="btn btn-primary"><i class="bi bi-play-fill"></i> Start</button>
                                             <button id="stopButton" class="btn btn-danger" disabled><i class="bi bi-stop-fill"></i> Stop</button>


                                               

                                                <form action="{{ route('tasks.update',$task_id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group mb-0"
                                                     style="margin: 19px;">


                                                     <i class="ri-pencil-ruler-2-line"></i>
                                                     <label for="exampleInputText01"
                                                          class="h5"> Status This Task</label>
                                                     <select name="status"
                                                          class="selectpicker custom-select form-control bg-white custom-radius"
                                                          data-style="py-0">
                                                          <option selected> Initiated</option>
                                                          <option> InProgress</option>
                                                          <option> Completed</option>
                                                          <option>Failed</option>

                                                     </select>
                                                </div>
                                                <hr>
                                      </div>

                                      <div class="card-body">

                                           <div class="card mb-3"
                                                style="border-radius: 20px;">
                                                <div class="card-body">
                                                     <div class="row">

                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText2"
                                                                         class="h5">Type </label>
                                                                  <p>{{ $order->type }}</p> - <p>{{ $order->pereferce}}</p>
                                                                  -<p>{{ $order->value }}
                                                               </div>
                                                          </div>
                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">Price</label>
                                                                       <p>{{ $order->final_price }}</p>
                                                               </div>
                                                          </div>

                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">Domain</label>
                                                                    <p>{{  $order->scope}}</p>
                                                               </div>
                                                          </div>

                                                          <div class="col-lg-2">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">Colors</label>

                                                                    <div class="form-control bg-white custom-radius"
                                                                         style="text-align:justify;">
                                                                       {{--   @foreach ($order->colors as $color) --}}


                                                                         <span class="dot"
                                                                              style="height: 25px; width: 25px;  background-color:#1114; border-radius: 50%; display: inline-block;"></span>

                                                                            {{--   @endforeach --}}
                                                                    </div>
                                                               </div>
                                                          </div>


                                                          <hr style="margin-top: 12px;">
                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">Illustration From
                                                                         Client</label>
                                                                    <div class="form-control bg-white custom-radius"
                                                                         style="text-align:justify;">
                                                                         <a href="{{ asset($order->image) }}">
                                                                              Click to open Image
                                                                         </a>
                                                                    </div>
                                                               </div>
                                                          </div>
                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">File From Client</label>
                                                                    <div class="form-control bg-white custom-radius"
                                                                         style="text-align:justify;">
                                                                         <a href="{{ $order->file }}">
                                                                              Click to open file
                                                                         </a>
                                                                    </div>
                                                               </div>
                                                          </div>

                                                     </div>
                                                </div>
                                                <div class="card mb-3"
                                                     style="border-radius: 20px;">
                                                     <div class="card-body">
                                                          <div class="row">
                                                               <h5 style="color: #333; "
                                                                    class="mb-2">Description :</h5>
                                                               <p class="mb-0">{{ $order->description }}</p>
                                                          </div>
                                                     </div>
                                                </div>
                                                <div class="card mb-3"
                                                     style="border-radius: 20px;">
                                                     <div class="card-body">
                                                          <div class="row">
                                                            <label>Notes</label>
                                                               <textarea name="notes"
                                                                    class="form-control bg-white @error('notes') border-light-danger @enderror"
                                                                    style="
                                                      border-radius:
                                                      4px;"
                                                                    rows="2"></textarea>
                                                               @error('notes')
                                                               <div>
                                                                    <div class="alert alert-danger">
                                                                         {{ $message }}
                                                                    </div>
                                                               </div>
                                                               @enderror
                                                          </div>
                                                     </div>
                                                </div>
                                                <div class="card mb-3"
                                                     style="border-radius: 20px;">
                                                     <div class="card-body">
                                                          <div class="row">
                                                               <div class="form-group mb-0">
                                                                    <i class="ri-attachment-2"></i>
                                                                    <label for="exampleInputText01"
                                                                         class="h5">Upload
                                                                         Attachments</label>
                                                                    <input type="file"
                                                                         name="edit_file"
                                                                         class=" form-control bg-white  "
                                                                         style="border-radius: 10px;">
                                                               </div>
                                                          </div>
                                                     </div>
                                                </div>
                                                <div class="card mb-3"
                                                     style="border-radius: 20px;">
                                                     <div class="card-body">
                                                          <div class="row">
                                                               <div class="form-group mb-0">
                                                                    <input type="submit"
                                                                         value="submit"
                                                                         class="btn btn-warning mr-3">
                                                               </div>
                                                          </div>
                                                     </div>
                                                </div>
                                           </div>
                                      </div>
                                 </div>
                                 </form>
                            </div>
                       </div>
                  </div>
             </div>
        </div>
   </div>
</div>

<!-- Add Axios CDN -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
     // Get the timer element and buttons
     const timerElement = document.getElementById('timer');
     const startButton = document.getElementById('startButton');
     const stopButton = document.getElementById('stopButton');

     // Set the initial time
     let seconds = 0;
     let minutes = 0;
     let hours = 0;

     // Format the time as HH:MM:SS
     function formatTime() {
     return `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
     }

     // Update the timer display
     function updateTimer() {
     seconds++;
     if (seconds === 60) {
     seconds = 0;
     minutes++;
     if (minutes === 60) {
          minutes = 0;
          hours++;
     }
     }

     // Print the time in the console
     console.log(formatTime());

     // Update the timer element
     timerElement.textContent = formatTime();
     }

     // Start the timer
     let timerInterval;
     startButton.addEventListener('click', function() {
     timerInterval = setInterval(updateTimer, 1000);
     startButton.disabled = true;
     });

     // Stop the timer
     stopButton.addEventListener('click', function() {
          
          clearInterval(timerInterval);
          startButton.disabled = false;
});
     function sendTimeToRoute() {
          
     // Send the timer data using AJAX
          const currentTime = formatTime();
          const url = '/timer'; // Replace with the actual URL of your server endpoint
          const data = { time: currentTime };

          fetch(url, {
          method: 'POST',
          headers: {
               'Content-Type': 'application/json',
               'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify(data)
          })
          .then(response => {
          console.log('Timer data sent successfully');
          })
          .catch(error => {
          console.error('Error sending timer data:', error);
          });
     }

     // Call the function to send the time every second
     setInterval(sendTimeToRoute, 1000);
</script>
</x-layouts.app>
