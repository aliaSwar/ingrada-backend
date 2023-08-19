<x-layouts.app>
     <div class="container-fluid">
          <div class="row">
               <div class="col-md-12">
                    <div class="card">
                              <div class="row ">
                                   <div class="col-lg-9 ">
                                        <div class="chat-box scrollable position-relative">
                                             <ul class="chat-list list-style-none px-3 pt-3">
                                             <!--chat Row -->
                                             <li class="chat-item list-style-none mt-3">
                                                  <div class="chat-img d-inline-block"><img
                                                            src="{{ asset($customer->avatar??'assets\images\users\3.png') }}"
                                                            alt="user"
                                                            class="rounded-circle"
                                                            width="45">
                                                  </div>
                                                  <div class="chat-content d-inline-block ps-3">
                                                       <h6 class="font-weight-medium">{{ $customer->fullname}}</h6>
                                                  </div>
                                             </li>
                                             </ul>
                                        </div>
                                        
                                   </div>
                              </div>
                              <hr>
                              <div class="row g-0">
                              <div class="col-lg-9  col-xl-10">
                                   <div class="chat-box scrollable position-relative"
                                        style="height: calc(100vh - 111px);">
                                        <!--chat Row -->
                                        <ul class="chat-list list-style-none px-3 pt-3">
                                             <!--chat Row -->
                                             @foreach ($messages as $message)

                                             @if( $message->is_sender_user==false)
                                             <li class="chat-item list-style-none mt-3">
                                                  <div class="chat-img d-inline-block"><img
                                                            src="{{ asset($customer->avatar??'assets\images\users\3.png') }}"
                                                            alt="user"
                                                            class="rounded-circle"
                                                            width="45">
                                                  </div>
                                                  <div class="chat-content d-inline-block ps-3">
                                                       <h6 class="font-weight-medium">{{ $customer->fullname}}</h6>
                                                       <div class="msg p-2 d-inline-block mb-1">{{$message->body}}</div>
                                                  </div>
                                                  <div class="chat-time d-block font-10 mt-1 mr-0 mb-3">{{ $message->created_at}}
                                                  </div>
                                             </li>
                                             @else
                                             <!--chat Row -->
                                             <li class="chat-item odd list-style-none mt-3">
                                                  <div class="chat-content text-end d-inline-block ps-3">
                                                       <div class="box msg p-2 d-inline-block mb-1">I
                                                            {{$message->body}}</div>
                                                       <br>
                                                       <div class="chat-time d-block font-10 mt-1 mr-0 mb-3">{{ $message->created_at}}
                                                  </div>
                                             </li>
                                             @endif
                                             @endforeach
                                        </ul>
                                   </div>
                                   
                                   <form action="{{ route('manager.new_message',$customer->id) }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                   <div class="card-body border-top">
                                        <div class="row">
                                             <div class="col-9">
                                                  <div class="input-field mt-0 mb-0">
                                                       <input id="textarea1"
                                                            name="body"
                                                            placeholder="Type and enter"
                                                            class="form-control border-0"
                                                            type="text">
                                                  </div>
                                             </div>
                                             <div class="col-3">
                                                  <button type="submit" class="btn-circle bg-cyan float-end text-white d-flex align-items-center justify-content-center border-0"
                                                       ><i class="fas fa-paper-plane"></i> </button>
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
</x-layouts.app>