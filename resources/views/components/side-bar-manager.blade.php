<x-layouts.app>

  <!-- Custom CSS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <link type="text/css" href="@@path/vendor/apexcharts/dist/apexcharts.css" rel="stylesheet">
<style>
  .bg-info-light
     {
      color: #FABB18 !important;
  background-color: #FFF8E8 !important;
  border-radius: 5px;
  margin-left: 12px;
     }
</style>
</head>


          <!-- ============================================================== -->
          <!-- Container fluid  -->
          <!-- ============================================================== -->
          <div class="container-fluid">
              <!-- *************************************************************** -->
              <!-- Start First Cards -->
              <!-- *************************************************************** -->
              <div class="row">
                  <div class="col-sm-6 col-lg-3">
                      <div class="card border-end">
                          <div class="card-body">
                              <div class="d-flex align-items-center">
                                  <div>
                                      <div class="d-inline-flex align-items-center">
                                          <h2 class="text-dark mb-1 font-weight-medium">4:20:2</h2>

                                      </div>
                                      <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Today's work hours
                                      </h6>
                                  </div>
                                  <div class="ms-auto mt-md-3 mt-lg-0">
                                      <a href="#" class="btn bg-info-light mr-3" ><i data-feather="pen-tool" class="feather-icon"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                      <div class="card border-end">
                          <div class="card-body">
                              <div class="d-flex align-items-center">
                                  <div>
                                      <div class="d-inline-flex align-items-center">
                                          <h2 class="text-dark mb-1 font-weight-medium">4:90:2</h2>

                                      </div>
                                      <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"> Week work hours
                                      </h6>
                                  </div>
                                  <div class="ms-auto mt-md-3 mt-lg-0">
                                      <a href="#" class="btn bg-info-light mr-3" ><i data-feather="clock" class="feather-icon"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                      <div class="card border-end ">
                          <div class="card-body">
                              <div class="d-flex align-items-center">
                                  <div>
                                      <div class="d-inline-flex align-items-center">
                                          <h2 class="text-dark mb-1 font-weight-medium">1538</h2>

                                      </div>
                                      <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"> Assigned tasks
                                      </h6>
                                  </div>
                                  <div class="ms-auto mt-md-3 mt-lg-0">

                                      <a href="#" class="btn bg-info-light mr-3" ><i data-feather="list" class="feather-icon"></i>

                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                      <div class="card ">
                          <div class="card-body">
                              <div class="d-flex align-items-center">
                                  <div>
                                      <h2 class="text-dark mb-1 font-weight-medium">864</h2>
                                      <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Direct orders</h6>
                                  </div>
                                  <div class="ms-auto mt-md-3 mt-lg-0">
                                      <a href="#" class="btn bg-info-light mr-3" ><i data-feather="inbox" class="feather-icon"></i></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- *************************************************************** -->
              <!-- End First Cards -->
              <!-- *************************************************************** -->
              <!-- *************************************************************** -->
              <!-- Start Sales Charts Section -->
              <!-- *************************************************************** -->
              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title mb-4"> <i data-feather="pie-chart" class="svg-icon"></i>statistics:</h4>


                          <hr>
                          <div style="width: 300px; height: 300px; margin-left: 100px;">

                              <canvas   id="Chart1"></canvas>
                          </div>
                          <hr>
                          <canvas id="Chart3"></canvas>
                          <hr>
                          <canvas id="Chart2"></canvas>
                  </div>
              </div>
          </div>

          <div class="col-6">
            <div class="card">


                    <div class="card-body">
                        <h4 class="card-title mb-4"> <i data-feather="star" class="svg-icon"></i>Designers Review:</h4>
                  <hr>


                    <div class="table-responsive">
                        <table class="table no-wrap v-middle mb-0">

                            <thead>
                                <tr class="border-0">
                                    <th class="border-0 font-14 font-weight-medium text-muted">Designer
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Email
                                    </th>
                                    <th class="border-0 font-14 font-weight-medium text-muted">Budjet</th>

                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($data['OrederDesigners'] as $OrederDesigner)
                              <tr>
                                    <td class="border-top-0 px-2 py-4">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="me-3"><img
                                                    src="{{ asset( $OrederDesigner->receiver->avatar ?? 'assets\images\users\1.jpg') }}"
                                                    alt="user" class="rounded-circle" width="45"
                                                    height="45" /></div>
                                            <div class="">
                                                <h5 class="text-dark mb-0 font-16 font-weight-medium">{{$OrederDesigner->receiver->fullname}}</h5>

                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$OrederDesigner->receiver->email}}</td>
                                    <td> {{ $OrederDesigner->total_points}} </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            </div>


              <!-- *************************************************************** -->
              <!-- End Sales Charts Section -->
              <!-- *************************************************************** -->
              <!-- *************************************************************** -->
              <!-- Start Location and Earnings Charts Section -->
              <!-- *************************************************************** -->


              <!-- *************************************************************** -->
              <!-- End Location and Earnings Charts Section -->
              <!-- *************************************************************** -->
              <!-- *************************************************************** -->
              <!-- Start Top Leader Table -->
              <!-- *************************************************************** -->



 <script>
  var ctx = document.getElementById('Chart2').getContext('2d');
  const socialmedia = <?php echo $data['social_media_count'] ?>;
     const Logo = <?php echo $data['Logo_count'] ?>;
     const Covers  = <?php echo $data['Covers_count'] ?>;
     const Drawing = <?php echo $data['Drawing_count'] ?>;
var Chart1 = new Chart(ctx, {
type: 'bar',
data: {
  labels: [' social media ','Logo ','Covers  ','Drawing '],
  datasets: [{
    label: 'the least',
    data: [socialmedia,Logo,Covers ,Drawing],
    backgroundColor: [
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)'
    ],
    borderColor: [
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(255, 159, 64, 0.2)'
    ],
    borderWidth: 0.5
  }]
}
});
</script>



<script>
  var ctx = document.getElementById('Chart1').getContext('2d');
  const internal_count = <?php echo $data['internal_count'] ?>;
     const external_count = <?php echo $data['external_count'] ?>;
var Chart1 = new Chart(ctx, {
type: 'doughnut',
data: {
  labels: ['Internal order','External order'],
  datasets: [{
    label: 'the least',
    data: [internal_count,external_count],
    backgroundColor: [
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)'

    ],
    borderColor: [
    'rgb(97, 97, 97)',
    'rgb(200, 200, 200)',
    'rgba(255, 159, 64, 0.2)',
      'rgba(54, 162, 235, 0.2)'
    ],
    borderWidth: 0.5
  }]
}
});
</script>



<script>
  var ctx = document.getElementById('Chart3').getContext('2d');
  const syria_count = <?php echo $data['syria_count'] ?>;
     const Lebanon_count = <?php echo $data['Lebanon_count'] ?>;
     const Turkey_count  = <?php echo $data['Turkey_count'] ?>;
     const Jordan_count = <?php echo $data['Jordan_count'] ?>;
var Chart1 = new Chart(ctx, {
type: 'bar',
data: {
  labels: [' Syria ','Lebanon ','Turkey  ','Jordan'],
  datasets: [{
    label: 'the least',
    data: [syria_count,Lebanon_count,Turkey_count,Jordan_count],
    backgroundColor: [
      'rgba(54, 162, 235, 0.2)',
     'rgba(54, 162, 235, 0.2)',
      'rgba(54, 162, 235, 0.2)',
     'rgba(54, 162, 235, 0.2)'

    ],
    borderColor: [
      'rgba(54, 162, 235, 0.2)',,
      'rgba(54, 162, 235, 0.2)',,
      'rgba(54, 162, 235, 0.2)',,
      'rgba(54, 162, 235, 0.2)',

    ],
    borderWidth: 0.5
  }]
}
});
</script>

</x-layouts.app>
