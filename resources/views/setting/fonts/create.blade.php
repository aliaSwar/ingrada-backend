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
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table no-wrap v-middle mb-0">
                                <div class="row">
                                    <form action="{{ route('fonts.store') }}"
                                        method="POST"
                                        class="row g-3 needs-validation"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="input-group mb-3">
                                            <input type="text"
                                                input
                                                name="name"
                                                class="form-control"
                                                placeholder="ADD NEW FONT!">
                                            <input type="file"
                                                input
                                                name="file"
                                                class="form-control">
                                            <button class="btn btn-warning"
                                                type="submit">save</button>
                                        </div>
                                    </form>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Font</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($fonts as $font)
                                        <tr>
                                            <td>{{ $font->name }}</td>
                                            <td><img src="{{$font->file  }}"
                                                    width="50px"></td>
                                            <td>
                                                <form action="{{ route('fonts.destroy',$font) }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="submit"
                                                        style="border: none; background-color: inherit;"> <a
                                                            class="delete"
                                                            title="Delete"
                                                            data-toggle="tooltip"><i
                                                                class="material-icons">event_busy</i></a>
                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
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


</x-layouts.app>