<x-layouts.app>
<style type="text/css">


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

#rating span {
font-size: 30px;
cursor: pointer;
}
</style>
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card" >
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
                                    <h4 class="mb-0" style="margin-top: 12px;">joun doe</h4>
                                    <h6 class="mb-0" style="margin-top: 12px;">Designer</h6>
                            </div>
                            <hr class="my-4">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Rating</h6>
                                    <span class="text-secondary">
                                        <div id='rating'>
                                            <span>&#9734; </span>
                                            <span>&#9734;</span>
                                            <span>&#9734;</span>
                                            <span>&#9734;</span>
                                            <span>&#9734;</span>
                                        </div>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"> tasks received</h6>
                                    <span class="text-secondary">13</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0">  tasks completed </h6>
                                <span class="text-secondary">20</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <i class="material-icons"></i>
                                    <a id="button" href="reports.html " style="color: #89a7ee;"> show reports </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" >
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0"> Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="John ">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Username</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="Doe">
                                </div>
                            </div>

                <div class="row mb-3">
                <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" value="john@example.com">
                </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" class="form-control" value="mmnnoo00">
                    </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Role</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <select  name="type" class="selectpicker custom-select form-control bg-white " data-style="py-0">
                                <option> designer</option>
                                <option> content creator</option>

                            </select>
                        </div>
                        </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Category</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <select  name="type" class="selectpicker custom-select form-control bg-white " data-style="py-0">
                                <option> fast</option>
                                <option> creative creator</option>

                            </select>
                        </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Vacation</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="10">
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
                    <input type="number" class="form-control" value="18">
                    </div>
                    <div class="col-sm-3" id="task2">
                        <h6 class="mb-0">Vacations</h6>
                        </div>
                        <div class="col-sm-9 text-secondary" id="task2">
                        <input type="number" class="form-control" value="20">
                        </div>


                <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                <input type="button" class="btn btn-outline-warning px-4" value="Save Changes" id="save">
                </div>
                </div>
                </div>
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
 
</x-layouts.app>
