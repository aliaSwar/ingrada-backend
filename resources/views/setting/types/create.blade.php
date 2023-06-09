<x-layouts.app>
 
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
						<div class="input-group mb-3">

						  </div>
                        <div class="card">

                            <div class="card-body">


                                <form action="{{ route('types.store') }}"
                                method="POST"
                                class="row g-3 needs-validation"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                        <label>TYPE TITLE:</label>
                                        <div class="col-auto" id="typ1">
                                          <label for="inputPassword2" class="visually-hidden">ADD NEW TYPE!</label>
                                          <input type="text" name="name" class="form-control" id="permission" placeholder="ADD NEW TYPE OF DEIGNS TO COMPANY!">
                                        </div>
                                        <label id="ava1">AVARAGE PRICE:</label>
                                        <div class="input-group" id="ava2" >

                                            <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                              <span class="input-group-text">$</span>

                                            </div>
                                          </div>
                                        <hr>
                                        <label id="text">PROPERTIES FOR THIS TYPE:</label>
                                        <br>


                                            <table  class="table table-bordered table-hover" id="dynamic_field">
                                              <tr>
                                                <td><input type="text" name="prename" placeholder=" title" class="form-control name_list" /></td>


                                                  <td><input type="file" name="preImage" placeholder="Enter Image" class="form-control Image"/></td>


                                                <td><input type="text" name="preprice" value="0.0 $" placeholder="Enter your Money" class="form-control total_amount"/></td>

                                              </tr>
                                            </table>
                                            <input type="text" name="add" id="add" class="text-primary" > + Enter to Add More for this!

                                          <input type="submit" id="submittype" class="btn btn-primary" name="submit" id="submit" value="Submit">

                                          <input type="button" name="add" id="add-pro" class="btn btn-outline-warning" value="Add more properties">




                                </form>


                            </div>
                                </div>

                            </div>
                        </div>
     

</x-layouts.app>
