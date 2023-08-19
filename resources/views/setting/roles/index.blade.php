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
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
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

        table.table tr th,
        table.table tr td {
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

        button {
            margin: 10px auto;
        }

        #myTable {
            margin-top: 30px;
        }
        </style>
        </slot>
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
                                                <input
                                                    class="form-control custom-shadow custom-radius border-1 bg-white"
                                                    id="myInput"
                                                    onkeyup="myFunction()"
                                                    type="search"
                                                    placeholder="Search"
                                                    aria-label="Search">
                                            </div>
                                        </form>
                                    </div>
                                    <table class="table table-bordered"
                                        id="myTable">
                                        <thead>
                                            <tr>
                                                <td>USERS </td>
                                                <th>RULE</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $role)


                                            <tr>
                                                <td style="text-align: center;">

                                                    <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                                        @foreach ($role->users as $user)
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-bs-placement="top" class="avatar avatar-sm pull-up" title
                                                                data-bs-original-title="{{ $user->fullname }}">
                                                                <img src="{{ asset($user->avatar ?? 'assets/images/users/profile-pic.jpg') }}"
                                                                    alt="Avatar" class="rounded-circle" />
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">

                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">{{$role->name}}
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>

                                                <td>

                                                    <a class="edit" href="{{ route('roles.edit', $role ) }}"
                                                        title="Edit"
                                                        data-toggle="tooltip"><i class="material-icons">gesture</i></a>
                                                    <a class="delete"
                                                        title="Delete"
                                                        data-toggle="tooltip"><i
                                                            class="material-icons">event_busy</i></a>
                                                    <a class="details"
                                                        title="details"
                                                        data-toggle="tooltip"
                                                        href="{{ route('roles.show',$role) }}"><i
                                                            class="material-icons">content_paste</i></a>
                                                </td>
                                            </tr>
                                            @endforeach
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
        <!-- ============================================================== -->
        <!-- ============================================================== -->



        <script type="text/javascript">

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
                    $(this).html('<input type="text" class="form-control" value="' + $(this)
                        .text() + '">');
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
</x-layouts.app>
