<x-layouts.app>

  <!DOCTYPE html>
  <html dir="ltr" lang="en">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="../dist/css/style.css" rel="stylesheet">
  <style type="text/css">

      #task1
      {
          margin-top: 12px;
      }
      #task2
      {
          margin-top: 12px;
          margin-bottom: 12px;
      }
      #card1
      {
          margin-top: 12px;
      }
      #card2
      {
          margin-top: 12px;

      }
      #save
      {
         margin-left: 400px;
      }
      #file
      {
          margin-bottom: 12px;
      }
      </style>
  </head>

              <!-- ============================================================== -->
              <!-- End Bread crumb and right sidebar toggle -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Container fluid  -->
              <!-- ============================================================== -->
                  <div class="container">
                  <div class="main-body">

                      <div class="col-lg-12">
                      <div class="card" id="card2" style="margin-top: 20px;">
                      <div class="card-body">
                          <i data-feather="layout" class="svg-icon" style="color: rgb(208, 90, 90);"></i>
                          <label>{{ $prefernce->name}}</label>
                          <i data-feather="plus" class="svg-icon" style="color: rgb(70, 125, 176); margin-left: 900px;"></i>
                          <label id="myButton" style="color: rgb(70, 125, 176);"> Add new</label>
                          <script type="text/javascript">
                              document.getElementById("myButton").onclick = function () {
                                  location.href = "newPropertiesAdd.html";
                              };
                          </script>
                           <form action="{{ route('preferncesvalues.store', $prefernce) }}" method="POST" class="row g-3 needs-validation"
                           enctype="multipart/form-data">

                           {{ csrf_field() }}
                          <hr>

                      <div class="row mb-3">
                      <div class="col-sm-3">
                      <h6 class="mb-0">Name:</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name='name'>
                      </div>
                      </div>
                      <div class="row mb-3">
                      <div class="col-sm-3">
                      <h6 class="mb-0">Price:</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name='price'>
                      </div>
                      </div>
                      <div class="row mb-3">
                      <div class="col-sm-3">
                      <h6 class="mb-0">upload new file;</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <input  id="file" type="file" name='image' class="form-control" >
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-sm-3"></div>
                      <div class="col-sm-9 text-secondary">
                      <input type="submit" class="btn btn-outline-warning px-4" value="Save Changes" id="save" style="margin-left: 730px;">
                      </div>
                      </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-sm-12">

                         <div>
                     </form>

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
              <!-- ============================================================== -->
              <!-- End Container fluid  -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- footer -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- End footer -->
              <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- End Page wrapper  -->
          <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Wrapper -->
      <!-- ============================================================== -->
      <!-- End Wrapper -->
      <!-- ============================================================== -->
      <!-- All Jquery -->
      <!-- ============================================================== -->
      <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <!-- apps -->
      <!-- apps -->
      <script src="../dist/js/app-style-switcher.js"></script>
      <script src="../dist/js/feather.min.js"></script>
      <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
      <script src="../dist/js/sidebarmenu.js"></script>
      <!--Custom JavaScript -->
      <script src="../dist/js/custom.min.js"></script>
      <!--This page JavaScript -->
      <script src="../assets/extra-libs/c3/d3.min.js"></script>

      <script src="../assets/extra-libs/c3/c3.min.js"></script>
      <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
      <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
      <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
      <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
      <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
        <!-- Vendors JS -->
        <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
        <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <!-- Main JS -->
        <script src="../assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="../assets/js/dashboards-analytics.js"></script>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="TableFilter.min.js" defer></script>
        <script>
    try {
      fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
        return true;
      }).catch(function(e) {
        var carbonScript = document.createElement("script");
        carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
        carbonScript.id = "_carbonads_js";
        document.getElementById("carbon-block").appendChild(carbonScript);
      });
    } catch (error) {
      console.log(error);
    }
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46156385-1', 'cssscript.com');
      ga('send', 'pageview');

    </script>
    <script src="../dist/js/TableFilter.min.js" ></script>
  </body>

  </html>
</x-layouts.app>
