<x-layouts.app>
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


                        <form action="{{ route('roles.store') }}" method="POST" class="row g-3">
                            @csrf
                                <label>JOB TITLE:</label>

                                <div class="col-auto">
                                    <br>
                                    <label for="inputPassword2"
                                        class="visually-hidden">ADD NEW ROLE!</label>
                                    <input type="text" name="name"
                                        class="form-control
                                        col-xs-4"
                                        placeholder="ADD NEW ROLE!">
                                </div>
                                <hr>
                                <label>PERMISSION FOR THIS ROLE:</label>
                                <br>
                                <br>
                                @foreach ($permissions as $permission)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="permissions[]"
                                        type="checkbox" value="{{$permission}}"
                                        value="option2"
                                        checked>
                                    <label class="form-check-label"
                                        for="inlineCheckbox2">{{ $permission}}</label>
                                </div>
                                @endforeach

<br><br>

                                <div class="col-auto">
                                    <button type="submit"
                                        class="btn btn-warning mb-3"
                                        >Save</button>
                                </div>


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
</x-layouts.app>
