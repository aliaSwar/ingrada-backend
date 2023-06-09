<x-layouts.app>
     <hr>
     <div class="content-page">
          <div class="container-fluid">
               <div class="row">
                    <div class="col-12">
                         <div class="card">
                              <div class="card-body">
                                   <div class="card card-list task-card">
                                        <div class="card-body">
                                             <div class="form-group mb-3 position-relative">

                                                  <h2>Create new internal Order :</h2>
                                             </div>
                                             <form method="POST"
                                                  action="{{ route('internal-orders.store') }}"
                                                  enctype="multipart/form-data">
                                                  @csrf
                                                  <div class="card mb-3"
                                                       style="border-radius: 20px;">
                                                       <div class="card-body">
                                                            <div class="row">
                                                                 <div class="col-lg-3">
                                                                      <div class="form-group ">
                                                                           <label for="exampleInputText2"
                                                                                class="h5">Type Of
                                                                                Designe</label>
                                                                           <br>
                                                                           <select name="type"
                                                                                class="selectpicker custom-select form-control bg-white custom-radius @error('type') border-light-danger @enderror"
                                                                                data-style="
                                                                                py-3">
                                                                                @foreach($types as $type)
                                                                                <option name="type"
                                                                                     value="{{ $type->name }}">
                                                                                     {{ $type->name }}</option>
                                                                                @endforeach
                                                                           </select>
                                                                           @error('type')
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
                                                                                class="h5">Due Dates*</label>
                                                                           <input type="date"
                                                                                class="custom-select form-control bg-white custom-radius @error('limit_date') border-light-danger @enderror"
                                                                                name="
                                                                                limit_date">
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
                                                                           <input type="number"
                                                                                class=" form-control bg-white custom-radius @error('final_price') border-light-danger @enderror""
                                                                                name="
                                                                                final_price"
                                                                                value="10$">
                                                                           @error('final_price')
                                                                           <div>
                                                                                <div class="alert alert-danger">
                                                                                     {{ $message }}</div>
                                                                           </div>
                                                                           @enderror
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="card mb-3"
                                                       style="border-radius: 20px;">
                                                       <div class="card-body">
                                                            <div class="row">
                                                                 <label for="exampleInputText040"
                                                                      class="h5">Description</label>
                                                                 <textarea name="description"
                                                                      class="form-control bg-white @error('description') border-light-danger @enderror"
                                                                      style="
                                                                      border-radius:
                                                                      4px;"
                                                                      id="exampleInputText040"
                                                                      rows="2"></textarea>
                                                                 @error('description')
                                                                 <div>
                                                                      <div class="alert alert-danger">{{ $message }}
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
                                                                           name="file"
                                                                           class=" form-control bg-white @error('file') border-light-danger @enderror" "
                                                                           style="
                                                                           border-radius:
                                                                           10px;">
                                                                      @error('file')
                                                                      <div>
                                                                           <div class="alert alert-danger">
                                                                                {{ $message }}</div>
                                                                      </div>
                                                                      @enderror
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
                                                                           class="btn btn-warning mr-3">
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <form>
                                        </div>
                                   </div>
                              </div>
                         </div>


</x-layouts.app>