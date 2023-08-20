<x-layouts.app>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="margin-bottom: 12px;"><i data-feather="file-plus" class="svg-icon" style="margin-right: 3px;"></i>ADD NEW CUSTMER!</h4>
<hr>
                                <div>
                                  <form method="POST"
                                    action="{{ route('internal-customers.store') }}"
                                       enctype="multipart/form-data">
                                            @csrf
                                    <div class="col-md-6">
                                        <label for="inputfullname4" class="form-label">First Name <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="text"  name = "first_name" class="form-control" id="inputfullname4" required >
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputUsername4" class="form-label">Last Name <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="text" name="last_name" class="form-control" id="inputUsername4" required >
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputfullname4" class="form-label">Company <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="text"  name = "company" class="form-control" id="inputfullname4" required >
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputUsername4" class="form-label">Country <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="text" name="country" class="form-control" id="inputUsername4" required >
                                      </div>
                                    <div class="col-md-4">
                                      <label for="inputEmail4" class="form-label">Email <label style="color: rgb(220, 61, 61);">*</label></label>
                                      <input type="email" name="email" class="form-control" id="inputEmail4" required >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail4" class="form-label">Phone <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="tel" name="phone_number" class="form-control" id="inputEmail4" required >
                                      </div>







<br>
<br>
                                    <div class="col-12">

                                      <button type="submit" class="btn btn-warning" >Submit</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>


</body>

</html>


</x-layouts.app>
