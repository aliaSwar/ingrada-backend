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


                        <form>
                            <form class="row g-3">
                                <label>JOB TITLE:</label>

                                <div class="col-auto">
                                    <br>
                                    <label for="inputPassword2"
                                        class="visually-hidden">ADD NEW ROLE!</label>
                                    <input type="text"
                                        class="form-control input-sm"
                                        placeholder="ADD NEW ROLE!">
                                </div>
                                <hr>
                                <label id="text">PERMISSION FOR THIS ROLE:</label>
                                <br>
                                <br>
                                @foreach ($permissions as $permission)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input"
                                        type="checkbox"
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
                        </form>


                    </div>
                </div>
                </di v>
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
