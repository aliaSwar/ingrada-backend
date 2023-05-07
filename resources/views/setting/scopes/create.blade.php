<x-layouts.app>

    <style type="text/css">
        #demo {
      font-size: 24px;
      height: 24px;
      padding: 0;
      display: flex;

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
                                              <input name="name" type="text" class="form-control" id="permission" placeholder="ADD NEW DOMAIN!">
                                            </div>
                                            <hr>
                                            <label id="text">
                                                COLORS FOR THIS:
                                            </label>
                                            <br>

                                                @for ($i = 0 ; $i<4 ; $i++)
                                                    <input type="color" name="colors[]" style="margin-right: 4px;" value="">
                                                    @endfor

                                                        <label for="colorPicker" >
                                                        </label>

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
