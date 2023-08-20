<x-layouts.app>

              <div class="container-fluid">

                  <div class="row">


                      <div class="col-12">

                          </div>
                          <div class="card">

                              <div class="card-body">

                                  <div class="table-responsive">
                                      <table class="table no-wrap v-middle mb-0">


  <div class="row" style="margin-bottom: 12px;">
      <form>
          <div class="customize-input">
              <input class="form-control custom-shadow custom-radius border-0 bg-white"
              id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search">
          </div>
      </form>
  </div>



  <table class="table table-bordered" id="myTable">
  <thead>
  <tr>

  <th class="text-dark mb-0 font-16 font-weight-medium">First Name</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">Last name</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">company</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">country</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">email</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">Phone</th>
  <th class="text-dark mb-0 font-16 font-weight-medium">Is Active</th>
  </tr>
  </thead>
  <tbody>
    @foreach ($internal_customers as $internal_customer)
    <tr  >
    <td>{{ $internal_customer->first_name}}</td>
    <td> {{ $internal_customer->last_name}} </td>
    <td>{{ $internal_customer->company}} </td>
    <td>{{ $internal_customer->country}} </td>
    <td>{{ $internal_customer->email}} </td>
    <td>{{ $internal_customer->phone_number}} </td>
    <td>{{ $internal_customer->is_active}} </td>

  </tr>
  @endforeach
  </tbody>

  </table>
                                      </table>
                                  </div>
                              </div>

                                  </div>

                              </div>

                          </div>
                      </div>


</x-layouts.app>
