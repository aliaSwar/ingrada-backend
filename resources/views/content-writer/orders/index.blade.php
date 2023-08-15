<x-layouts.app>
     <div class="container-fluid">
          <div class="row">
                    <div class="table-responsive">
                         <table  class="table table-striped table-bordered ">
                         <thead>
                              <tr>
                                   <th>Status</th>
                                   <th>Customer</th>
                                   <th>Designer</th>
                                   <th>Type</th>
                                   <th>Primary Price</th>
                                   <th>Limit Date</th>
                                   <th>Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($orders as $order)
                              <tr>
                                   <td><span class="fs-6">{{$order->status}}</span></td>
                                   <td><a href="" class="font-weight-medium link">{{$order->customer->name??""}}</a></td>
                              @if ($order->is_order_designer)
                              <td><a href="javascript:void(0)" class="font-bold link">Selected Designer</a></td>
                              @else

                              <td><a href="javascript:void(0)" class="font-bold link">Not Selected Designer</a></td>
                              @endif
                                   <td>{{ $order->type }}</td>
                                   <td>{{ $order->primary_price }}</td>
                                   <td>{{ $order->limit_date }}</td>
                                        <td class="border-top-0 px-2 py-4">
                                             <div class="popover-icon">
                                                  <a class="btn btn-primary rounded-circle btn-circle font-12" href="{{ route('content-writer.tasks.create',$order) }}">Task</a>
                                                  <a class="btn btn-danger rounded-circle btn-circle font-12 popover-item" href="javascript:void(0)">SS</a>

                                             </div>
                                   </td>
                              </tr>
                              @endforeach
                         </table>
                         {{ $orders->links() }}
                         </ul>
                    </div>
               </div>
          </div>
     </div>
     </div>
</div>
</x-layouts.app>
