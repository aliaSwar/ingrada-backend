
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

                                            <h2>Display New External Order To Designer <a href="#">{{$designer_name->fullname}}</a></h2>
                                       </div>

                                        <div class="media align-items-center mt-md-0 mt-3">

                                            <p style="font-size: 19px  " id="timer"> 00 : 00 : 00 </p>
                                            <a id="button-start" class="btn bg-info-light mr-3"><i class="ri-play-circle-line"></i></a>
                                            <a id="button-stop" class="btn bg-info-light mr-3"><i class="ri-pause-circle-line"></i></a>
                                            <a id="button-reset" class="btn bg-info-light mr-3"><i class="ri-restart-line"></i></a>


                                           <a class="btn editt" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseEdit1"><i class="ri-save-line"></i></a>


                                                </div>

                                                <form action="{{ route('showexternal',$order) }}"
                                                method="POST">
                                                @csrf
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
                                                                  class="h5">Select Content Writer </label>
                                                                  <select name="user_id"
                                                                  class="selectpicker custom-select form-control bg-white custom-radius"
                                                                  data-style="py-0">
                                                                  @foreach ($users as $user)
                                                                  <option value="{{ $user->id }}"> {{ $user->fullname }}</option>
                                                                  @endforeach


                                                                  </select>
                                                        </div>
                                                   </div>

                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText2"
                                                                         class="h5">Type </label>
                                                                    <input type="text"
                                                                         name="type"
                                                                         class="custom-select form-control bg-white custom-radius "
                                                                         value="{{ old('type', $order->type??'') }}">
                                                               </div>
                                                          </div>
                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">End Dates</label>
                                                                    <input type="date"
                                                                         name="limit_date"
                                                                         class="custom-select form-control bg-white custom-radius "
                                                                         value="{{ old('limit_date', $order->limit_date) }}">
                                                               </div>
                                                          </div>
                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">Price</label>
                                                                    <input type="text"
                                                                         name="final_price"
                                                                         class=" form-control bg-white custom-radius "
                                                                         value="{{$order->primary_price}}">
                                                               </div>
                                                          </div>
                                                          <hr style="margin-top: 12px;">
                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText2"
                                                                         class="h5"> Design</label>
                                                                    <input type="text"
                                                                         name="pereferce"
                                                                         class=" form-control bg-white custom-radius "
                                                                         value={{ old('pereferce', $order->pereferce??'') }}>
                                                               </div>
                                                          </div>
                                                          @if ($order->value!=null)
                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText2"
                                                                         class="h5">Type Of Design</label>
                                                                    <input type="text"
                                                                         name="value"
                                                                         class=" form-control bg-white custom-radius "
                                                                         value="{{ old('value', $order->value) }}">
                                                               </div>
                                                          </div>
                                                          @endif


                                                          <div class="col-lg-3">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">Domain</label>
                                                                    <input type="text"
                                                                         name="scope"
                                                                         class=" form-control bg-white custom-radius "
                                                                         value={{ old('scope', $order->scope??"") }}>
                                                               </div>
                                                          </div>


                                                          <div class="col-lg-2">
                                                               <div class="form-group mb-0">
                                                                    <label for="exampleInputText3"
                                                                         class="h5">Colors</label>
                                                                    <div class="form-control bg-white custom-radius"
                                                                         style="text-align:justify;">
                                                                         <span class="dot"
                                                                              style="height: 25px; width: 25px;  background-color: #d10707; border-radius: 50%; display: inline-block;"></span>
                                                                         <span class="dot"
                                                                              style="height: 25px; width: 25px;  background-color: #a7c920; border-radius: 50%; display: inline-block;"></span>
                                                                         <span class="dot"
                                                                              style="height: 25px; width: 25px;  background-color: rgb(51, 168, 88); border-radius: 50%; display: inline-block;"></span>
                                                                         <span class="dot"
                                                                              style="height: 25px; width: 25px;  background-color: #520a0a; border-radius: 50%; display: inline-block;"></span>
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
                                                                         <a href="C:\Users\ABC\Desktop\cpp">
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

myTime.textContent = ` ${twoDigits(h)} : ${twoDigits(m)} : ${twoDigits(s)} `
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
