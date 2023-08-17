
<x-layouts.app>
     <div class="content-page">
          <div class="container-fluid">
               <div class="row">
              <div class="col-12">
                   <div class="card">
                        <div class="card-body">
                             <div class="card card-list task-card">
                                  <div class="card-body">
                                       <div class="form-group mb-3 position-relative">

                                            <h2>Display New External Order To Designer  <a href="#">{{$designer_name->fullname??''}}</a></h2>
                                       </div>


                                       <div class="media align-items-center mt-md-0 mt-3">
                                                <p style="font-size: 19px ;margin-right: 30px; " id="timer" data-user-id="{{ $task_id }}"> 00 : 00 : 00 </p>
                                                <a id="button-start" class="btn bg-info-light mr-3"><i class="ri-play-circle-line"></i></a>
                                                <a id="button-stop" class="btn bg-info-light mr-3"><i class="ri-pause-circle-line"></i></a>
                                                <a id="button-reset" class="btn bg-info-light mr-3"><i class="ri-restart-line"></i></a>
                                                <a class="btn editt" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseEdit1"><i class="ri-save-line"></i></a>
                                            </div> 

                                               

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
                                                          <option> Progress</option>
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

        const timer     = { ref:null, tZero:null, tim:0 }
    , myTime    = document.getElementById('timer')
    , btStart   = document.getElementById('button-start')
    , btStop    = document.getElementById('button-stop')
    , btReset   = document.getElementById('button-reset')
    , twoDigits = n => ('0' + n).slice(-2)
    , one_Sec   = 1000
    , one_Min   = one_Sec * 60
    , one_Hour  = one_Min * 60 

    function countUp()
    {
    let now   = new Date().getTime()
    timer.tim = now - timer.tZero 
    let h     = Math.floor(timer.tim  / one_Hour)
        , m     = Math.floor((timer.tim % one_Hour) / one_Min  )
        , s     = Math.floor((timer.tim % one_Min ) / one_Sec  )

    myTime.textContent = ` ${twoDigits(h)} : ${twoDigits(m)} : ${twoDigits(s)} `;
    return myTime.textContent;
    }

    btStart.onclick=()=>
    {  
    timer.tZero      = new Date().getTime() - timer.tim 
    timer.ref        = setInterval(countUp,500)

    btStart.disabled = true
    btStop.disabled  = false
    }
    btStop.onclick=()=>
    {
     const task_id = document.getElementById('timer').dataset.userId;

     console.log(task_id);
         ///send time to back 
    const url = '/timer'; // Replace with the actual URL of your server endpoint
          const data = { 
               time: countUp(),
               task_id : task_id
          };
          fetch(url, {
          method: 'POST',
          headers: {
               'Content-Type': 'application/json',
               'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify(data)
          })
          .then(response => {
          console.log('Timer data sent successfully',response);
          })
          .catch(error => {
          console.error('Error sending timer data:', error);
          });
     clearInterval( timer.ref )
     timer.ref        = null
     btStart.disabled = false
     btStop.disabled  = true
     }
     btReset.onclick=()=>
     {
     if (timer.ref) clearInterval( timer.ref )
     myTime.textContent = ' 00 : 00 : 00 '
     timer.tZero        = null
     timer.ref          = null
     timer.tim          = 0
     btStart.disabled   = false
     btStop.disabled    = true
}
</script>
</x-layouts.app>
