<x-layouts.app>
     <hr>
     <div class="content-page">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-12">
                         <div class="card">
                              <div class="card-body">
                                   <div
                                        class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                                        <h5>
                                             All Enternal Orders.
                                        </h5>
                                        <div class="d-flex flex-wrap align-items-center">

                                             <a href="{{ route('internal-orders.create') }} "
                                                  class="btn btn-outline-warning"
                                                  data-target="#new-task-modal"
                                                  data-toggle="modal">New Orders</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-12">
                         <div class="card"
                         >
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-12">
                                             <div class="card card-widget task-card">
                                                  <div class="card-body">
                                                       
                                                                 <div>
                                                                      <h5 class="mb-2">Orders
                                                                      </h5>
                                                                 </div>
                                                            </div>
                                                            
                                                       
                                                  </div>
                                             </div>
                                             
                                                  <div class="card card-list task-card"
                                                       >
                                                       <hr>
                                                       <div class="card-body">
                                                            <div class="form-group mb-3 position-relative">

                                                                 <input type="text"
                                                                      class=" form-control bg-white  "
                                                                      style="border-radius: 10px;"
                                                                      value="Design landing page of webkit">
                                                                 <a href="#"
                                                                      class="task-edit task-simple-edit text-body"><i
                                                                           class="ri-edit-box-line"></i></a>
                                                            </div>
                                                            @foreach ($orders as $order)
                                                            <form method="POST"
                                                                 action="{{ route('internal-orders.update',$order) }}"
                                                                 enctype="multipart/form-data">
                                                                 @method('PUT')
                                                                 @csrf
                                                            <div class="card mb-3"
                                                                 style="border-radius: 20px;">
                                                                 <div class="card-body">
                                                                      <div class="row">
                                                                           <div class="col-lg-3">
                                                                                <div class="form-group mb-0">
                                                                                     <label for="exampleInputText2"
                                                                                          class="h5">Status</label>
                                                                                          <select name="status"
                                                                                          class="selectpicker custom-select form-control bg-white custom-radius"
                                                                                          data-style="py-0">
                                                                                               <option selected>{{ $order->status }}</option>
                                                                                               <option value="Pendning"> Pendning </option>
                                                                                               <option value="Initiated">Initiated</option>
                                                                                               <option value="InProgress">InProgress</option>
                                                                                               <option value="Completed">Completed</option>
                                                                                               <option value="Failed">Failed</option>
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-lg-3">
                                                                                <div class="form-group mb-0">
                                                                                     <label for="exampleInputText2"
                                                                                          class="h5">Type Of
                                                                                          Designe</label>
                                                                                     <select name="type"
                                                                                          class="selectpicker custom-select form-control bg-white custom-radius"
                                                                                          data-style="py-0">
                                                                                          <option selected>{{ $order->type }}</option>
                                                                                          @foreach ($types as $type)
                                                                                               <option value="{{ $type }}">{{ $type }}</option>
                                                                                          @endforeach
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-lg-3">
                                                                                <div class="form-group mb-0">
                                                                                     <label for="exampleInputText3"
                                                                                          class="h5">Due Dates*</label>
                                                                                     <input type="date"
                                                                                          class="custom-select form-control bg-white custom-radius "
                                                                                          id="exampleInputText3"
                                                                                          value="{{ old('limit_date', $order->limit_date) }}">
                                                                                          @error('limit_date')
                                                                                          <div>
                                                                                               <div class="alert alert-danger">
                                                                                                    {{ $message }}</div>
                                                                                          </div>
                                                                                          @enderror
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-lg-3">
                                                                                <div class="form-group mb-0">
                                                                                     <label for="exampleInputText3"
                                                                                          class="h5">Price</label>
                                                                                     <input type="text" name="final_price"
                                                                                          class=" form-control bg-white custom-radius "
                                                                                          id="exampleInputText3"
                                                                                          value="{{ old('final_price', $order->final_price) }}">
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
                                                                           <div class="form-group mb-0">
                                                                                <i class="ri-attachment-2"></i>
                                                                                <label for="exampleInputText01"
                                                                                     class="h5">Upload
                                                                                     Attachments</label>
                                                                                <input type="file"
                                                                                     name="file"
                                                                                     class=" form-control bg-white"
                                                                                     style="border-radius: 10px;"
                                                                                     value="{{ old('file', $order->file) }}"
                                                                                     >
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
                                                                           value="create"
                                                                           class="btn btn-warning mr-3"
                                                                                >
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                            @endforeach
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>








                                   </div>
                              </div>
                         </div>
                         <!-- Page end  -->
</x-layouts.app>