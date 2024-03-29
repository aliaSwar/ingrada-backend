<x-layouts.app>
  <br>
  <br>
                            <!--logo customiz-->
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                            <div class="col-12">
                                <div class="card card-widget task-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">

                                            </div>

                                            <div class="media align-items-center mt-md-0 mt-3">
                                                <p style="font-size: 19px ;margin-right: 30px; " id="timer"> 00 : 00 : 00 </p>
                                                <a id="button-start" class="btn bg-info-light mr-3"><i class="ri-play-circle-line"></i></a>
                                                <a id="button-stop" class="btn bg-info-light mr-3"><i class="ri-pause-circle-line"></i></a>
                                                <a id="button-reset" class="btn bg-info-light mr-3"><i class="ri-restart-line"></i></a>
                                                <a class="btn editt" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseEdit1"><i class="ri-save-line"></i></a>
                                            </div>

                                                    <div class="card card-list task-card" id="edit" style="margin-top: 12px;">
                                                        <div  style="margin-top: 20px; margin-left: 16px;">



                                                      <div class="form-group mb-0" style="margin: 19px;">
                                                        <form action="{{ route('tasks.update',$task_id) }}"
                                                          method="POST">
                                                          @csrf
                                                          @method('PUT')


                                                          <i class="ri-pencil-ruler-2-line"></i>
                                                          <label for="exampleInputText01" class="h5"> Status This Task</label>
                                                          <select  name="status" class="custom-select form-control bg-white custom-radius " data-style="py-0">
                                                              <option selected> Initiated</option>
                                                              <option> Progress</option>
                                                              <option> Test</option>
                                                              <option> Completed</option>
                                                              <option>Failed</option>
                                                          </select>
                                                      </div>
                                                               <hr>
                                                          </div>

                                                      <div class="card-body">

                                                          <div class="card mb-3" style="border-radius: 20px;">
                                                              <div class="card-body">
                                                                  <div class="row">

                                                                      <div class="col-lg-3">
                                                                          <div class="form-group mb-0">
                                                                              <label for="exampleInputText2"   class="h5">Type </label>
                                                                              <input type="text" name="type" class="custom-select form-control bg-white custom-radius "  value="{{$order->type??'' }}">
                                                                          </div>
                                                                      </div>

                                                                      <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">End Dates</label>
                                                                            <input type="date" name="end_date" class="custom-select form-control bg-white custom-radius "  value="{{  $order->limit_date }}">
                                                                        </div>
                                                                    </div>

                                                                      <hr style="margin-top: 12px;">
                                                                      <div class="col-lg-3">
                                                                          <div class="form-group mb-0">
                                                                              <label for="exampleInputText3" class="h5">File From manger</label>
                                                                              <div class="form-control bg-white custom-radius" style="text-align:justify;">
                                                                                  <a href="C:\Users\ABC\Desktop\cpp">
                                                                                      Click to open Image
                                                                                  </a>
                                                                                  </div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-lg-3">
                                                                          <div class="form-group mb-0">
                                                                              <label for="exampleInputText3" class="h5">File From Client</label>
                                                                              <div class="form-control bg-white custom-radius" style="text-align:justify;">
                                                                                  <a href="{{ $order->file }}">
                                                                                      Click to open file
                                                                                  </a>
                                                                                  </div>
                                                                          </div>
                                                                      </div>

                                                              </div>
                                                          </div>
                                                          <div class="card mb-3" style="border-radius: 20px;">
                                                              <div class="card-body">
                                                                  <div class="row">
                                                                          <h5 style="color: #333; " class="mb-2">Description :</h5>
                                                                          <p class="mb-0">{{ $order->description }}</p>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          <div class="card mb-3" style="border-radius: 20px;">
                                                              <div class="card-body">
                                                                  <div class="row">
                                                                      <div class="form-group mb-0">
                                                                          <i class="ri-attachment-2"></i>
                                                                          <label for="exampleInputText01" class="h5">Upload Attachments</label>
                                                                          <input type="file" name="file_designer" class=" form-control bg-white  " style="border-radius: 10px;" >
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card mb-3" style="border-radius: 20px;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                  <div class="form-group mb-0">
                                                                    <input type="submit"
                                                                         value="submit"
                                                                         class="btn btn-warning mr-3">
                                                                  </div>
                                                                </form>
                                                               </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                  </div>

                                          </div>
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
