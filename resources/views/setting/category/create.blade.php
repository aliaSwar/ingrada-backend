<x-layouts.app>

     <div class="container-fluid">

          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">ADD NEW Category!</h4>
                          <form action="{{ route('categories.store') }}" method="POST" class="row g-3 needs-validation"
                                  enctype="multipart/form-data">
                                   {{ csrf_field() }}
                                   <br>
                              <div class="col-md-6">
                                  <label for="inputfullname4" class="form-label">Name:*</label>
                                  <input type="text"  name = "name" class="form-control"  required >
                                </div>
                                
                                <div class="col-12">

                                   <button type="submit" class="btn btn-warning">Submit</button>
                                 </div>
                               </form>
                         </div>
                     </div>
                 </div>
             </div>


         </div>
</x-layouts.app>