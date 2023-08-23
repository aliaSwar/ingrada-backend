<x-layouts.app>

  <!DOCTYPE html>
  <html dir="ltr" lang="en">
  <style type="text/css">

      #task1
      {
          margin-top: 12px;
      }
      #task2
      {
          margin-top: 12px;
          margin-bottom: 12px;
      }
      #card1
      {
          margin-top: 12px;
      }
      #card2
      {
          margin-top: 12px;

      }
      #save
      {
         margin-left: 400px;
      }
      .profile-pic {
      border-radius: 50%;
      height: 150px;
      width: 150px;
      background-size: cover;
      background-position: center;
      background-blend-mode: multiply;
      vertical-align: middle;
      text-align: center;
      color: transparent;
      transition: all .3s ease;
      text-decoration: none;
      cursor: pointer;
  }

  .profile-pic:hover {
      background-color: rgba(0,0,0,.5);
      z-index: 10000;
      color: #fff;
      transition: all .3s ease;
      text-decoration: none;
  }

  .profile-pic span {
      display: inline-block;
      padding-top: 4.5em;
      padding-bottom: 4.5em;
  }

  form input[type="file"] {
            display: none;
            cursor: pointer;
   }

      </style>

  <body>

              <!-- ============================================================== -->
              <!-- Container fluid  -->
              <!-- ============================================================== -->
                  <div class="container">
                  <div class="main-body">
                  <div class="row">
                  <div class="col-lg-4">
                  <div class="card" id="card1">
                  <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                      <form action="upload.php" method="post" enctype="multipart/form-data">
                          <label for="fileToUpload">
                        <div class="profile-pic" style="background-image: url($user->avatar)">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span >Change Image</span>
                        </div>
                        </label>
                        <input type="File" name="fileToUpload" id="fileToUpload">
                      </form>
                      <h4 class="mb-0" style="margin-top: 12px;">{{ $user->username }}</h4>
                      <h6 class="mb-0" style="margin-top: 12px;">@foreach ($user->roles as $role)
                        {{ $role->name }}
                      @endforeach
                      
                    </h6>

                  </div>
                  <hr class="my-4">
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                          <h6 class="mb-0">Rating</h6>
                          <span class="text-secondary">
                              <i data-feather="star" ></i>
                              <i data-feather="star" ></i>
                              <i data-feather="star" ></i>
                              <i data-feather="star" ></i>
                              <i data-feather="star" ></i>
                          </span>

                          </li>


                  </ul>
                  </div>
                  </div>
                  </div>
                  <div class="col-lg-8">
                  <div class="card" id="card2">
                  <div class="card-body">
                  <div class="row mb-3">
                  <div class="col-sm-3">
                  <h6 class="mb-0"> Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="{{$user->fullname}}">
                  </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" value="{{$user->username}}">
                      </div>
                      </div>

                  <div class="row mb-3">
                  <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="{{$user->email}}">
                  </div>
                  </div>
                      <hr>
                      <div class="row mb-3">
                          <div class="col-sm-3">
                          <h6 class="mb-0">Category</h6>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{$user->category}}">
                            </div>
                          </div>
                  <div class="row mb-3">
                  <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="(239) 816-9029">
                  </div>
                  </div>
                  <div class="row mb-3">
                  <div class="col-sm-3">
                  <h6 class="mb-0">Mobile</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="(320) 380-4539">
                  </div>
                  </div>
                  <div class="row mb-3">
                  <div class="col-sm-3">
                  <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                  <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                  </div>
                  <div class="col-sm-3" id="task1">
                      <h6 class="mb-0">Number Task</h6>
                      </div>
                      <div class="col-sm-9 text-secondary" id="task1">
                      <input type="number" class="form-control" value="{{ $user->number_tasks}}">
                      </div>
                  <div class="row">
                  <div class="col-sm-12">

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>


                  <!-- *************************************************************** -->
                  <!-- End Top Leader Table -->
                  <!-- *************************************************************** -->
              </div>
              <!-- ============================================================== -->
              <!-- End Container fluid  -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- footer -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- End footer -->
              <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->


  </body>

  </html>

</x-layouts.app>
