<x-layouts.app>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">



                        <!-- *************************************************************** -->
                        <!-- End First Cards -->
                        <!-- *************************************************************** -->
                        <!-- *************************************************************** -->
                        <!-- Start Sales Charts Section -->
                        <!-- *************************************************************** -->
                   <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header bg-white">
                                    <div class="card-title" style="margin: 12px;">

                                        <i data-feather="truck" class="svg-icon"></i>
                                        Task Finished :

                                </div></div>
                                <hr>
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table no-wrap v-middle mb-0">

                                            <thead>
                                                <tr class="border-0">
                                                    <th class="border-0 font-14 font-weight-medium text-muted">worker
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted"> customer
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted"> type
                                                    </th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">open file</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">chat</th>
                                                    <th class="border-0 font-14 font-weight-medium text-muted">publish App</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach ($orders as $order)

                                                <tr>
                                                    <td class="border-top-0 px-2 py-4">
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="me-3">
                                                            <div class="">
                                                              @foreach ($order->users as $user)
                                                              <a href="">
                                                              <h5 class="text-dark mb-0 font-16 font-weight-medium">{{ $user->fullname }}</h5>
                                                              </a>
                                                              @endforeach


                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">{{ $order->customer->fullname}}

                                                    </td>
                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">{{ $order->type }}

                                                    </td>


                                                    <td class="font-weight-medium text-dark border-top-0 px-2 py-4">

                                                         <span></span>  <a href={{ asset($order->file_designer) }}> click to open file</a>

                                                    </td>
                                                    <td><a href="{{ route('manager.chat_customer', $order->customer->id) }}"><i data-feather="message-circle" class="svg-icon"></i>
                                                    </a></td>
                                                    <td>
                                                        <a id="connectId" href="{{ route('manager.publish_item', $order->id) }}"
                                                        onclick="pp()" > <i id="publish" data-feather="upload"></i> </a>
                                                            <script>
                                                                function pp() {
                                                                    const publish = $('#publish');
                                                                    publish.replaceWith(feather.icons['check-circle'].toSvg());
                                                                }
                                                              </script>

                                                        </a>



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
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
</x-layouts.app>
