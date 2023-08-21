<x-layouts.app>
     <div class="container-fluid">

          <div class="row">
               <div class="col-12">
                    <div class="card">

                         <div class="card-body">

                              <div class="table-responsive">
                                   <div class="row">
                                        <form>
                                             <div class="customize-input">
                                                  <input
                                                       class="form-control custom-shadow custom-radius border-0 bg-white"
                                                       type="search"
                                                       placeholder="Search"
                                                       aria-label="Search">
                                             </div>
                                        </form>
                                   </div>

                                   <table class="table table-bordered">
                                        <thead>
                                             <tr>

                                                  <th class="text-dark mb-0 font-16 font-weight-medium"> Name
                                                  </th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">Task
                                                  </th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">
                                                       Category</th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">Is
                                                       Active</th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">Role</th>
                                                  <th class="text-dark mb-0 font-16 font-weight-medium">
                                                       Actions</th>
                                             </tr>     
                                        </thead>
                                        <tbody>
                                             @foreach ($users as $user)
                                             <tr>
                                                  <td> {{$user->fullname}} </td>
                                                  <td>{{ $user->number_tasks}} </td>
                                                  <td>{{ $user->categories->name??""}} </td>
                                                  <td>{{ $user->is_active}} </td>
                                                  <td>@foreach ($user->roles as $role)
                                                                      {{ $role->name }}
                                                                      @endforeach</td>

                                                  <td>
                                                       <a class="details"
                                                            title="details"
                                                            data-toggle="tooltip"
                                                            href="{{ route('users.show', $user) }}"><i
                                                                 class="material-icons">event_note</i></a>
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
     <!-- *************************************************************** -->
     <!-- End Top Leader Table -->
     <!-- *************************************************************** -->
     </div>

</x-layouts.app>
