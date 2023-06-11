<x-layouts.app>
  <style type="text/css">
     input.required:invalid {
      color: red;
  }
</style>

              <div class="container-fluid">

                  <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title">ADD NEW EMPLOYEE!</h4>
                                  <form action="{{ route('users.store') }}" method="POST" class="row g-3 needs-validation"
                                          enctype="multipart/form-data">
                                           {{ csrf_field() }}
                                      <div class="col-md-6">
                                          <label for="inputfullname4" class="form-label">Full Name</label>
                                          <input type="text"  name = "fullname" class="form-control"  required >
                                        </div>
                                        <div class="col-md-6">
                                          <label for="inputUsername4" class="form-label">Username</label>
                                          <input type="text" name="username"  class="form-control" id="inputUsername4" required >
                                        </div>
                                      <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail4" required >
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="inputPassword4" required >
                                      </div>
                                      <div class="col-md-6">
                                          <label for="inputTask4" class="form-label">Number Task</label>
                                          <input type="number" name="number_tasks" class="form-control" id="inputTask4" required >
                                        </div>
                                      <div class="col-12">
                                        <label for="inputAddress" class="form-label">Image</label>
                                        <input type="file" name="path" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                      </div>


                                      <div class="col-md-4">
                                        <label for="inputState" class="form-label">Category</label>
                                        <select id="inputState" name ="category_id" class="form-select" required >
                                          <option selected>Choose.. </option>
                                          @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                           @endforeach
                                        </select>
                                      </div>
                                      <div class="col-md-4">
                                          <label for="inputState" class="form-label">Role</label>
                                          <select id="inputState" name ="role" class="form-select" required >
                                            <option selected>Choose... </option>
                                          @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                           @endforeach
                                          </select>
                                        </div>





                                      <div class="col-12">

                                        <button type="submit" class="btn btn-warning" style="margin-left:1060px ;">Submit</button>
                                      </div>
                                    </form>
                              </div>
                          </div>
                      </div>
                  </div>


              </div>
            </x-layouts.app>
