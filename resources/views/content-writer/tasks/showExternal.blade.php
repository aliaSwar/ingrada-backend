
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

                                            <h2>Display New External Order To Designer <a href="#">{{$designer_name->fullname??''}}</a></h2>
                                       </div>

                                                <form action="{{ route('order_update',$task->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group mb-0"
                                                     style="margin: 19px;">


                                                     <i class="ri-pencil-ruler-2-line"></i>
                                                     <label for="exampleInputText01"
                                                          class="h5"> Status This Task</label>
                                                     <select name="status"
                                                          class="form-control bg-white custom-radius"
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
                                                                              style="height: 25px; width: 25px;  background-color:# {{ $order->color }}; border-radius: 50%; display: inline-block;"></span>

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
                                                          <div class="col-lg-3">
                                                            <div class="form-group mb-0">
                                                                 <label for="exampleInputText3"
                                                                      class="h5">File From Designer {{$designer_name->fullname??''}}</label>
                                                                 <div class="form-control bg-white custom-radius"
                                                                      style="text-align:justify;">
                                                                      <a href="{{ $order->file_designer }}">
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

</x-layouts.app>
