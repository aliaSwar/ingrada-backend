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
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
          <div class="lds-ripple">
              <div class="lds-pos"></div>
              <div class="lds-pos"></div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- Main wrapper - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
          data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
          <!-- ============================================================== -->

                      <!-- Toggle which is visible on mobile only -->
                      <!-- ============================================================== -->
                      <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                          data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                              class="ti-more"></i></a>
                  </div>

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
                        <div class="profile-pic" style="background-image: url('https://randomuser.me/api/portraits/med/men/65.jpg')">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span >Change Image</span>
                        </div>
                        </label>
                        <input type="File" name="fileToUpload" id="fileToUpload">
                      </form>
                      <h4 class="mb-0" style="margin-top: 12px;">{{ $user->username }}</h4>
                      <h6 class="mb-0" style="margin-top: 12px;">Designer</h6>

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
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">

                      <i class="material-icons"></i>
                      <a id="button" href="{{route('Daily_designers',$user->id)}} " style="color: #89a7ee;"> show reports </a>

                      </li>
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
          <!-- End Page wrapper  -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Wrapper -->
      <!-- ============================================================== -->
      <!-- End Wrapper -->
      <!-- ============================================================== -->
      <!-- All Jquery -->
      <!-- ============================================================== -->
      <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <!-- apps -->
      <!-- apps -->
      <script src="../dist/js/app-style-switcher.js"></script>
      <script src="../dist/js/feather.min.js"></script>
      <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
      <script src="../dist/js/sidebarmenu.js"></script>
      <!--Custom JavaScript -->
      <script src="../dist/js/custom.min.js"></script>
      <!--This page JavaScript -->

  </body>

  </html>

</x-layouts.app>
