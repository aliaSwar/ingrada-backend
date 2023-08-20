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

                                                      <div class="card card-list task-card" id="edit" style="margin-top: 12px;">
                                                          <div  style="margin-top: 20px; margin-left: 16px;">



                                                      <div class="form-group mb-0" style="margin: 19px;">


                                                          <i class="ri-pencil-ruler-2-line"></i>
                                                          {{ $order->status }}
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
                                                                              <label for="exampleInputText3" class="h5">File From Manager</label>
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

      </x-layouts.app>
