<x-layouts.app>

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="margin-bottom: 12px;"><i data-feather="file-plus" class="svg-icon" style="margin-right: 3px;"></i>ADD NEW CUSTMER!</h4>
<hr>
                                <div>
                                  <form method="POST"
                                    action="{{ route('internal-customers.store') }}"
                                       enctype="multipart/form-data">
                                            @csrf
                                    <div class="col-md-6">
                                        <label for="inputfullname4" class="form-label">First Name <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="text"  name = "first_name" class="form-control" id="inputfullname4" required >
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputUsername4" class="form-label">Last Name <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="text" name="last_name" class="form-control" id="inputUsername4" required >
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputfullname4" class="form-label">Company <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="text"  name = "company" class="form-control" id="inputfullname4" required >
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputUsername4" class="form-label">Country <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="text" name="country" class="form-control" id="inputUsername4" required >
                                      </div>
                                    <div class="col-md-4">
                                      <label for="inputEmail4" class="form-label">Email <label style="color: rgb(220, 61, 61);">*</label></label>
                                      <input type="email" name="email" class="form-control" id="inputEmail4" required >
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmail4" class="form-label">Phone <label style="color: rgb(220, 61, 61);">*</label></label>
                                        <input type="tel" name="phone_number" class="form-control" id="inputEmail4" required >
                                      </div>




                                    <div class="col-md-4">
                                      <label for="inputState" class="form-label">Is Active</label>
                                      <input type="tel" name="is_active" class="form-control" id="inputEmail4" required >
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

     <script>
        $('[type="submit"]').on('click', function () {
    // this adds 'required' class to all the required inputs under the same <form> as the submit button
    $(this)
        .closest('form')
        .find('[required]')
        .addClass('required');
});
     </script>

       <script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {

         if( document.myForm.Name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.Name.focus() ;
            return false;
         }
         if( document.myForm.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
            document.myForm.Zip.value.length != 5 ) {

            alert( "Please provide a zip in the format #####." );
            document.myForm.Zip.focus() ;
            return false;
         }
         if( document.myForm.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         }
         return( true );
      }
   //-->
</script>

</body>

</html>


</x-layouts.app>
