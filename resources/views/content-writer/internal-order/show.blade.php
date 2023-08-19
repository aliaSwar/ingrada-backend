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

                                                  {{-- <p style="font-size: 19px ;margin-right: 30px; " id="timer"> 00 : 00 : 00 </p> --}}
                                                  <a id="button-start" class="btn bg-info-light mr-3"><i class="ri-play-circle-line"></i></a>
                                                  <a id="button-stop" class="btn bg-info-light mr-3"><i class="ri-pause-circle-line"></i></a>
                                                  <a id="button-reset" class="btn bg-info-light mr-3"><i class="ri-restart-line"></i></a>


                                                 <a class="btn editt" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseEdit1"><i class="ri-save-line"></i></a>


                                                      </div>

                                                      <div class="card card-list task-card" id="edit" style="margin-top: 12px;">
                                                          <div  style="margin-top: 20px; margin-left: 16px;">



                                                      <div class="form-group mb-0" style="margin: 19px;">
                                                        <form action="{{ route('orders.update',$order->id) }}"
                                                          method="POST">
                                                          @csrf
                                                          @method('PUT')

                                                          <i class="ri-pencil-ruler-2-line"></i>
                                                          <label for="exampleInputText01" class="h5"> Status This Task</label>
                                                          <select  name="status" class="selectpicker custom-select form-control bg-white custom-radius" data-style="py-0">
                                                              <option selected> Initiated</option>
                                                              <option> InProgress</option>
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
                                                                              <label for="exampleInputText3" class="h5">limit Dates</label>
                                                                              <input type="date" name="start_date" class="custom-select form-control bg-white custom-radius "  value="{{  $order->limit_date }}">
                                                                          </div>
                                                                      </div>

                                                                      <div class="col-lg-3">
                                                                          <div class="form-group mb-0">
                                                                              <label for="exampleInputText3" class="h5">Price</label>
                                                                              <input type="text" name="final_price" class=" form-control bg-white custom-radius "  value="{{$order->final_price}}">
                                                                          </div>
                                                                      </div>



                                                                      <hr style="margin-top: 12px;">
                                                                      <div class="col-lg-3">
                                                                          <div class="form-group mb-0">
                                                                              <label for="exampleInputText3" class="h5">Illustration From Client</label>
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
                                                                          <input type="file" name="edit_file" class=" form-control bg-white  " style="border-radius: 10px;" >
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="card mb-3" style="border-radius: 20px;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                  <div class="form-group mb-0">
                                                                    <input type="submit"
                                                                         value="create"
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

      </x-layouts.app>
