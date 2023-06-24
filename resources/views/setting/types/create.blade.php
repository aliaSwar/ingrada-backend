<x-layouts.app>
    <x-slot name="styles">
<style type="text/css">
	#submittype
    {
        margin-top: 30px ;
        margin-left:1020 px ;
    }
    #dynamic_field
    {
        margin-top: 12px;
    }
    #add-pro
    {
        margin-top: 30px ;
        margin-right:1020 px ;
    }
    #ava1
    {
        margin-top: 12px;
    }
    #ava2
    {
        margin-top: 12px;
    }
    #typ1
    {
        margin-top: 12px;
    }

    </style>
</x-slot>

            <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="input-group mb-3">

                  </div>
                <div class="card">

                    <div class="card-body">


                        <form action="{{ route('types.store') }}" method="POST" class="row g-3 needs-validation"
                        enctype="multipart/form-data">

                        {{ csrf_field() }}
                                <label>TYPE TITLE:</label>
                                <div class="col-auto" id="typ1">
                                  <label for="inputPassword2" class="visually-hidden">ADD NEW TYPE!</label>
                                  <input type="text" name="name" class="form-control" id="permission" style="margin-top: 12px;" placeholder="ADD NEW TYPE OF DESIGNS TO COMPANY!">
                                </div>
                                <label>NUMBER OF PROPRTIES:</label>
                                <div class="col-auto" id="typ1">
                                  <label for="inputPassword2" class="visually-hidden">ADD NUMBER!</label>
                                  <input type="number" name="proprtiesnumber" class="form-control" id="permission" style="margin-top: 12px;" placeholder="ADD NUMBER!!">
                                </div>
                                <label id="ava1" style="margin-top: 12px; margin-bottom: 12px;">AVARAGE PRICE:</label>
                                <div class="input-group" id="ava2" >

                                    <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                      <span class="input-group-text">$</span>
                                    </div>


                                  </div>
                                <hr>


                              <input type="submit" id="submittype" class="btn btn-primary" name="submit" id="submit" value="Submit">

                              <button   class="btn btn-outline-warning" onclick="addprp()"  value="Add  properties">Add  properties</button>
                              <script>
                                function addprp() {
                                  window.location.href = "newProperties.html";
                                }
                              </script>
                        </form>


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
      <script src="multiselect-dropdown.js" ></script>
      <script src="../assets/js/main.js"></script>

      <!-- Page JS -->  <script type="module" src="../../source/modules/smart.dropdownlist.js"></script>
    <script type="module" src="index.js"></script>

      <script src="../assets/js/dashboards-analytics.js"></script>


      <script>
        $(document).ready(function(){

  var i = 1;
    var length;
    //var addamount = 0;
   var addamount = 0.0;

  $("#add").click(function(){



     addamount += 0.0;
     console.log('amount: ' + addamount);
   i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="--add type or title" class="form-control name_list"/></td><td><input type="file" name="Image[]" placeholder="Enter Image" class="form-control img"/></td>	</td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

  $(document).on('click', '.btn_remove', function(){
    addamount -= 0.0;
    console.log('amount: ' + addamount);



      var button_id = $(this).attr("id");
      $('#row'+button_id+'').remove();
    });



    $("#submit").on('click',function(event){
    var formdata = $("#add_name").serialize();
      console.log(formdata);

      event.preventDefault()

      $.ajax({
        url   :"action.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#add_name")[0].reset();
        }
      });

    });
  });
    </script>


      <script>

        $(document).ready(function(){

  var i = 1;
    var length;
    //var addamount = 0;
   var addamount = 0.0;

  $("#add-pro").click(function(){



     addamount += 0.0;
     console.log('amount: ' + addamount);
   i+2;
      $('#dynamic_field').append('<tr id="row'+i+'"><td ><input type="text" name="name[]" placeholder="title" class="form-control name_list"/></td><td><input type="file" name="Image[]" placeholder="Enter Image" class="form-control img"/>    <td><input type="text" name="amount[]" value="0.0 $" placeholder="Enter your Money" class="form-control total_amount"/></td> </td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
    });

  $(document).on('click', '.btn_remove', function(){
    addamount -= 0.0;
    console.log('amount: ' + addamount);



      var button_id = $(this).attr("id");
      $('#row'+button_id+'').remove();
    });



    $("#submit").on('click',function(event){
    var formdata = $("#add_name").serialize();
      console.log(formdata);

      event.preventDefault()

      $.ajax({
        url   :"action.php",
        type  :"POST",
        data  :formdata,
        cache :false,
        success:function(result){
          alert(result);
          $("#add_name")[0].reset();
        }
      });

    });
  });
    </script>



    <script src="multiple-select.js"></script>
    <script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>


</x-layouts.app>

