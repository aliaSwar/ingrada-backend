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
                                                       <div
                                                            class="d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                 <div>
                                                                      <h5 class="mb-2">Design landing page of webki
                                                                      </h5>
                                                                 </div>
                                                            </div>
                                                            <div class="media align-items-center mt-md-0 mt-3">
                                                                 <a href="#"
                                                                      class="btn bg-info-light mr-3">start</a>
                                                                 <a class="btn bg-info-light"
                                                                      data-toggle="collapse"
                                                                      href="#collapseEdit1"
                                                                      role="button"
                                                                      aria-expanded="false"
                                                                      aria-controls="collapseEdit1"><i
                                                                           class="ri-edit-box-line m-0"></i></a>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             
                                                  <div class="card card-list task-card"
                                                       id="edit">
                                                       <div style="margin-top: 20px; margin-left: 16px;">

                                                       </div>
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
                                                            @foreach ($collection as $item)
                                                                

                                                            <div class="card mb-3"
                                                                 style="border-radius: 20px;">
                                                                 <div class="card-body">
                                                                      <div class="row">
                                                                           <div class="col-lg-3">
                                                                                <div class="form-group mb-0">
                                                                                     <label for="exampleInputText2"
                                                                                          class="h5">Status</label>
                                                                                     <select name="type"
                                                                                          class="selectpicker custom-select form-control bg-white custom-radius"
                                                                                          data-style="py-0">
                                                                                          <option>Kianna Septimus
                                                                                          </option>
                                                                                          <option>Jaxson Herwitz
                                                                                          </option>
                                                                                          <option>Ryan Schleifer
                                                                                          </option>
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
                                                                                          <option>logo</option>
                                                                                          <option>somthing</option>
                                                                                          <option>somthing</option>
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
                                                                                          value="">
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-lg-3">
                                                                                <div class="form-group mb-0">
                                                                                     <label for="exampleInputText3"
                                                                                          class="h5">Price</label>
                                                                                     <input type="text"
                                                                                          class=" form-control bg-white custom-radius "
                                                                                          id="exampleInputText3"
                                                                                          value="10$">
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
                                                                           <p class="mb-0">Amet minim mollit non
                                                                                deserunt ullamco est sit aliqua dolor do
                                                                                amet sint. Velit officia consequat duis
                                                                                enim velit mollit. Exercitation veniam
                                                                                consequat sunt nostrud amet.</p>
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
                                                                                     class=" form-control bg-white  "
                                                                                     style="border-radius: 10px;">
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