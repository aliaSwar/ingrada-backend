<x-layouts.app>
    <x-slot name="styles">
        <style type="text/css">
            body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;

            }
            .table-wrapper {
            width: 1090px;
            margin: 1x auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
            }
            .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
            }
            .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
            }
            .table-title .add-new i {
            margin-right: 4px;
            }
            table.table {
            table-layout: fixed;
            }
            table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            }
            table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
            }
            table.table th:last-child {
            width: 100px;
            }
            table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
            }
            table.table td a.add {
            color: #63f1a1;
            }
            table.table td a.edit {
            color: #18131a;
            }
            table.table td a.delete {
            color: #141310;
            }
            table.table td a.details {
            color: #7509e0;
            }

            table.table td i {
            font-size: 19px;
            }
            table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
            }
            table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
            }
            table.table .form-control.error {
            border-color: #f50000;
            }
            table.table td .add {
            display: none;
            }
            button
            {
                margin: 10px auto;
            }
            #myTable
            {
                margin-top: 30px;
            }
            </style>
    </x-slot>
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
                                            <input class="form-control custom-shadow custom-radius border-0 bg-white" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search">
                                        </div>
                                    </form>
                                </div>
                                <table class="table table-bordered" id="myTable">
                                    <thead>
                                        <tr>
                                            <td>Image </td>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Task</th>
                                            <th>Category</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Password</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">
                                                <div><img src="../assets/images/users/widget-table-pic1.jpg" alt="user" class="rounded-circle" width="45" height="45" /></div>
                                            </td>
                                            <td>
                                                <div class="d-flex no-block align-items-center">

                                                    <div class="">
                                                        <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna Gover
                                                        </h5>

                                                    </div>
                                                </div>
                                            </td>
                                            <td>John-Doe</td>
                                            <td>8</td>
                                            <td>fast</td>
                                            <td>bb99@gmail.com</td>
                                            <td>desiger</td>
                                            <td>nana66</td>
                                            <td>
                                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">check_circle</i></a>
                                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">gesture</i></a>
                                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">event_busy</i></a>
                                                <a class="details" title="details" data-toggle="tooltip" href="details.html"><i class="material-icons">content_paste</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">
                                                <div><img src="../assets/images/users/widget-table-pic1.jpg" alt="user" class="rounded-circle" width="45" height="45" /></div>
                                            </td>
                                            <td>
                                                <div class="d-flex no-block align-items-center">

                                                    <div class="">
                                                        <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna Gover
                                                        </h5>

                                                    </div>
                                                </div>
                                            </td>

                                            <td>John-Doe</td>
                                            <td>8</td>
                                            <td>fast</td>

                                            <td>bb99@gmail.com</td>
                                            <td>desiger</td>
                                            <td>nana66</td>
                                            <td>
                                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">check_circle</i></a>
                                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">gesture</i></a>
                                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">event_busy</i></a>
                                                <a class="details" title="details" data-toggle="tooltip" href="details.html"><i class="material-icons">content_paste</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">

                                                <div><img src="../assets/images/users/widget-table-pic1.jpg" alt="user" class="rounded-circle" width="45" height="45" /></div>
                                            </td>
                                            <td>

                                                <div class="">
                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">Hanna Gover
                                                    </h5>

                                                </div>
                        </div>
                        </td>

                        <td>John-Doe</td>
                        <td>8</td>
                        <td>fast</td>

                        <td>bb99@gmail.com</td>
                        <td>desiger</td>
                        <td>nana66</td>
                        <td>
                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">check_circle</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">gesture</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">event_busy</i></a>
                            <a class="details" title="details" data-toggle="tooltip" href="details.html"><i class="material-icons">content_paste</i></a>
                        </td>
                        </tr>
                        </tbody>




                        </table>
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
<!-- ============================================================== -->
<!-- End Container fluid  -->
<x-slot name="script">
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            var actions = $("table td:last-child").html();
            // Append table with add row form on add new button click
            $(".add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                    '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                    '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                    '<td><input type="text" class="form-control" name="Date" id="Date"></td>' +
                    '<td><input type="text" class="form-control" name="Type" id="Type"></td>' +
                    '<td><input type="text" class="form-control" name="Email" id="Email"></td>' +
                    '<td><input type="text" class="form-control" name="Country" id="Country"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("table").append(row);
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
            // Add row on add button click
            $(document).on("click", ".add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function() {
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
            });
            // Edit row on edit button click
            $(document).on("click", ".edit", function() {
                $(this).parents("tr").find("td:not(:last-child)").each(function() {
                    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").attr("disabled", "disabled");
            });
            // Delete row on delete button click
            $(document).on("click", ".delete", function() {
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
</x-slot>


</x-layouts.app>
