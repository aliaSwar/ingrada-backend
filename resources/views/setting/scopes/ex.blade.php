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

    <!-- Using a local copy -->

<!-- Include the default stylesheet -->
<link rel="stylesheet" type="text/css" href="multiple-select.css">
<!-- Include plugin -->

<!-- Or using a CDN -->

<!-- Include the default stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.css">
<!-- Include plugin -->
<link href="../dist/css/style.css" rel="stylesheet">


<style type="text/css">
	#demo {
  font-size: 24px;
  height: 24px;
  padding: 0;
  display: flex;

  #flexCheckDisabled
	{
		background-color: rgb(216, 205, 205);
		margin-left: 30px;
	}
	#flexCheckCheckedDisabled
	{
		margin-left: 30px;
	}
}

body {
  padding : 30px;
}

code {
  padding: 5px 8px;
  border-radius: 10px;
  background-color: #f8f9f9;
  color: #8d7983;
}

[type='color'] {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  padding: 0;
  width: 15px;
  height: 15px;
  border: 10px;
}

[type='color']::-webkit-color-swatch-wrapper {
  padding: 0;
}

[type='color']::-webkit-color-swatch {
    border: 0px solid #070606;
    border-radius: 2px;
    width: 20 px;

}

.color-picker {
  padding: 10px 15px;
  border-radius: none;
  border: 1px solid #120a0a;
  background-color: #f8f9f9;
  margin-top:1060px;
}
#hex
{
    margin-left: 12px;
    margin-top: 12px;
}
#submittype
{margin-top: 12px;
margin-left: 990px;
}
.filled-circle {
  padding: 2px 11px;
  border-radius: 100%;
  background-color: #f38e23;
}
    </style>
</head>


            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
						<div class="input-group mb-3">
						  </div>
                        <div class="card">
                            <div class="card-body">
                            <form action="{{ route('scopes.store') }}" method="POST" class="row g-3 needs-validation"
                              enctype="multipart/form-data">
                                  {{ csrf_field() }}
                                        <label>DOMAIN:</label>
                                        <div class="col-auto" id="typ1">
                                          <label for="inputPassword2" class="visually-hidden">ADD NEW DOMAIN!</label>
                                          <input type="text" name="name" class="form-control" id="permission" placeholder="ADD NEW DOMAIN!">
                                        </div>
                                        <hr>
                                        <label id="text" style="margin-bottom: 17px;">COLORS FOR THIS:</label>
                                        <br>

                                          @foreach ($colors as $color)
                                            <input id="" name="colors[]"  value="{{ $color->id }}" class="form-check-input" type="checkbox"  style="width: 20px; height: 20px; background-color:{{ $color->code }}; border-color: {{ $color->code }}; margin-right: 12px;"  >

                                            @endforeach

                                      <hr>

                                      <button class="btn btn-warning" type="submit">save</button>
                              </form>


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
      <script src="multiselect-dropdown.js" ></script>
      <script src="../assets/js/main.js"></script>

      <!-- Page JS -->  <script type="module" src="../../source/modules/smart.dropdownlist.js"></script>
    <script type="module" src="index.js"></script>

      <script src="../assets/js/dashboards-analytics.js"></script>

<script>
    document.querySelectorAll('input[type=color]').forEach(function(picker) {

var targetLabel = document.querySelector('label[for="' + picker.id + '"]'),
  codeArea = document.createElement('span');

codeArea.innerHTML = picker.value;
targetLabel.appendChild(codeArea);

picker.addEventListener('change', function() {
  codeArea.innerHTML = picker.value;
  targetLabel.appendChild(codeArea);
});
});
</script>
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
      $('#dynamic_field').append('<tr id="row'+i+'"><td> <span class="color-picker"> <label for="colorPicker"> <input type="color" value="#1DB8CE" id="colorPicker"> </label> </span></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
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



    <script>let color = document.querySelector('.colorPick')
        let themeColor = document.querySelector('#theme-color')

        const setColor = (colorSel, textSel) => {
          // change the value to the default color
          themeColor.value = color.value
          // event listener to change the text input value when the pickers value changes
          color.addEventListener('change', () => {
            return themeColor.value = color.value
          })
        }

        setColor(color, themeColor)</script>


    <script src="multiple-select.js"></script>
    <script src="https://cdn.rawgit.com/wenzhixin/multiple-select/e14b36de/multiple-select.js"></script>

</body>

</html>
</x-layouts.app>
