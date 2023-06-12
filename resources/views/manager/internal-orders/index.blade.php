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
                                                                                               <option value="{{ $type->name }}">{{ $type->name }}</option>
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
                                                            @if ($order->users()->count() === 0)
                                                                 <div class="card mb-3"
                                                                 style="border-radius: 20px;">
                                                                 <div class="card-body">
                                                                      <div class="row">
                                                                           <div class="col-lg-3">
                                                                                <div class="form-group mb-0">
                                                                                     <label for="exampleInputText2"
                                                                                          class="h5">Category Content Writer</label>
                                                                                          <select name="status"
                                                                                          class="selectpicker custom-select form-control bg-white custom-radius"
                                                                                          data-style="py-0">
                                                                                          @foreach ($categories_user as $category)
                                                                                               <option >{{ $category }}</option>
                                                                                          @endforeach
                                                  
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-lg-3">
                                                                                <div class="form-group mb-0">
                                                                                     <label for="exampleInputText3"
                                                                                          class="h5">Start Dates*</label>
                                                                                     <input type="date" name="start_date"
                                                                                          class="custom-select form-control bg-white custom-radius "
                                                                                          id="exampleInputText3"
                                                                                          >
                                                                                          @error('start_date')
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
                                                                                          class="h5">End Date*</label>
                                                                                     <input type="date" name="end_date"
                                                                                          class="custom-select form-control bg-white custom-radius "
                                                                                          >
                                                                                          @error('end_date')
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
                                                                                          class="h5">Prority</label>
                                                                                          <select name="prority"
                                                                                          class="selectpicker custom-select form-control bg-white custom-radius"
                                                                                          data-style="py-0">
                                                                                               <option value="high"> High </option>
                                                                                               <option value="normal">Normal</option>
                                                                                               <option value="low">Low</option>
                                                                                          </select>
                                                                                </div>
                                                                           </div>
                                                                      </div> 
                                                                 </div>
                                                            </div>
                                                            
                                                       @endif
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
                                                                                     class="h5">Change 
                                                                                     Attachments File</label>
                                                                                <input type="file"
                                                                                     name="file"
                                                                                     class=" form-control bg-white"
                                                                                     style="border-radius: 10px;"
                                                                                     value="{{ old('file', $order->file) }}"
                                                                                     >
                                                                                     <br>
                                                                                     <a  class="column  align-items-center" href={{ $order->file }}><h3>press to download file</h3></a>
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
                                        <div class="column  align-items-center" >{{ $orders->links() }}</div>
                                   </div>
                              </div>
                         </div>
                         <!-- Page end  -->
</x-layouts.app>