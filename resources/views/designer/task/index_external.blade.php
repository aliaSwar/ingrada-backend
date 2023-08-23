<x-layouts.app>

        <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">

                          <div class="card-body">

                              <div class="table-responsive">
                                  <table class="table no-wrap v-middle mb-0">
                        <div class="row">


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

                        <th>Type</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Customer Name</th>
                        <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                        <tr  >
                        <td>{{ $order->type}}</td>
                        <td> {{ $order->final_price}} </td>
                        <td>{{ $order->status}} </td>
                        <td>{{ $order->customer->fullname??""}}</td>
                        <td>
                            <a class="Details"  data-toggle="Details" href={{ route('designer.show_external_order', $order->id) }}><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                              </div>
                          </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

</x-layouts.app>

