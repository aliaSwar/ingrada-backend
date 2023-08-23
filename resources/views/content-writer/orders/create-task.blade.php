<x-layouts.app>
  <br>
  <br>

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
                                                          <label for="exampleInputText01" class="h5"> Priorty This Task</label>
                                                          <select  name="status" class="form-control bg-white custom-radius" data-style="py-0">
                                                              <option selected> High</option>
                                                              <option> Low</option>
                                                              <option> Middle</option>


                                                          </select>
                                                      </div>
                                                               <hr>
                                                          </div>

                                                    <div class="card-body">
                                                    <form action="{{ route('content-writer.create-tasks.store', $order->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                            @if ($order->is_order_designer)
                                                            <div class="card mb-3" style="border-radius: 20px;">
                                                              <div class="card-body">
                                                                  <div class="row">
                                                                    <label for="exampleInputText01" class="h5">Desginer</label>
                                                              <h3> {{ $designer->fullname}}</h3>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          @else
                                                          <div class="card mb-3" style="border-radius: 20px;">
                                                            <div class="card-body">
                                                                <div class="row">
                                                            <h3> Auto Distrbuited Task on Designer </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            @endif
                                                            <div class="card mb-3" style="border-radius: 20px;">
                                                              <div class="card-body">
                                                                  <div class="row">

                                                                      <div class="col-lg-3">
                                                                          <div class="form-group mb-0">
                                                                              <label for="exampleInputText2"   class="h5">Name </label>
                                                                              <input type="text" name="name" class="custom-select form-control bg-white custom-radius "  value="{{$order->type??'' }}">
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-lg-3">
                                                                          <div class="form-group mb-0">
                                                                              <label for="exampleInputText3" class="h5">Start Dates</label>
                                                                              <input type="date" name="start_date" class="custom-select form-control bg-white custom-radius "  value="{{  $order->start_date }}">
                                                                          </div>
                                                                      </div>

                                                                      <div class="col-lg-3">
                                                                        <div class="form-group mb-0">
                                                                            <label for="exampleInputText3" class="h5">End Dates</label>
                                                                            <input type="date" name="end_date" class="custom-select form-control bg-white custom-radius "  value="{{  $order->end_date }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3" >
                                                                      <i class="ri-pencil-ruler-2-line"></i>
                                                                      <label for="exampleInputText01" class="h5"> Category</label>
                                                                      <select  name="category" class=" form-control bg-white custom-radius" data-style="py-0">
                                                                      @foreach ($categories as $category)
                                                                      <option > {{ $category->name }}</option>
                                                                      @endforeach

                                                                      </select>
                                                                  </div>

                                                                      <hr style="margin-top: 12px;">
                                                                      <div class="col-lg-3">
                                                                          <div class="form-group mb-0">
                                                                              <label for="exampleInputText3" class="h5">File From manger</label>
                                                                              <div class="form-control bg-white custom-radius" style="text-align:justify;">
                                                                                  <a href="{{ asset($order->image) }}">
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
                                                                    <label for="exampleInputText040"
                                                                      class="h5">Description</label>
                                                                    <textarea name="description"
                                                                    class="form-control bg-white "
                                                                    style="
                                                                    border-radius:
                                                                    4px;"
                                                                    id="exampleInputText040"
                                                                    rows="2"></textarea>
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
                                                                         value="submit"
                                                                         class="btn btn-warning mr-3">
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




      </x-layouts.app>
