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
    <th>Task</th>
    <th>Type</th>
    <th> Start Date</th>
    <th> End Date</th>
    <th>Status</th>
    <th>Details</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
    <tr  >
    <td>{{ $task->name}}</td>
    <td> {{ $task->type}} </td>
    <td> {{ $task->start_date}} </td>
    <td> {{ $task->end_date}} </td>
    <td>{{ $task->status}} </td>
    <td>
        <a class="Details"  data-toggle="Details" href="{{ route('tasks.show', $task->id) }}"><i class="material-icons" style="color: #b2b3d6;">map</i>  </a>
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

         <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        var actions = $("table td:last-child").html();
        // Append table with add row form on add new button click
        $(".add-new").click(function(){
        $(this).attr("disabled", "disabled");
        var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
        '<td><input type="text" class="form-control" name="name" id="name"></td>' +
        '<td><input type="text" class="form-control" name="department" id="avargePrice"></td>' +

        '<td>' + actions + '</td>' +
        '</tr>';
        $("table").append(row);
        $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
        });
        // Add row on add button click
        $(document).on("click", ".add", function(){
        var empty = false;
        var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
        if(!$(this).val()){
        $(this).addClass("error");
        empty = true;
        } else{
        $(this).removeClass("error");
        }
        });
        $(this).parents("tr").find(".error").first().focus();
        if(!empty){
        input.each(function(){
        $(this).parent("td").html($(this).val());
        });
        $(this).parents("tr").find(".add, .edit").toggle();
        $(".add-new").removeAttr("disabled");
        }
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function(){
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
        $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
        });
        $(this).parents("tr").find(".add, .edit").toggle();
        $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
        $(".add-new").removeAttr("disabled");
        });
        });
        </script>
         <script>
            function myFunction() {
     var input, filter, table, tr, td, cell, i, j;
     input = document.getElementById("myInput");
     filter = input.value.toUpperCase();
     table = document.getElementById("myTable");
     tr = table.getElementsByTagName("tr");
     for (i = 1; i < tr.length; i++) {
       // Hide the row initially.
       tr[i].style.display = "none";

       td = tr[i].getElementsByTagName("td");
       for (var j = 0; j < td.length; j++) {
         cell = tr[i].getElementsByTagName("td")[j];
         if (cell) {
           if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
             tr[i].style.display = "";
             break;
           }
         }
       }
     }
    }
           </script>
    </html>
</x-layouts.app>

